<?php
/**
 * Someoddpilot_Sniffs_Methods_CamelCapsMethodNameSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 */

if (class_exists('PSR1_Sniffs_Methods_CamelCapsMethodNameSniff', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PSR1_Sniffs_Methods_CamelCapsMethodNameSniff not found');
}

/**
 * Someoddpilot_Sniffs_Methods_CamelCapsMethodNameSniff.
 *
 * Ensures method names are defined using camel case.
 *
 * Like PSR1_Sniffs_Methods_CamelCapsMethodNameSniff, but shows a warning
 * instead of an error.
 *
 * @category  PHP
 */
class Someoddpilot_Sniffs_Methods_CamelCapsMethodNameSniff extends PSR1_Sniffs_Methods_CamelCapsMethodNameSniff
{


    /**
     * Processes the tokens within the scope.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being processed.
     * @param int                  $stackPtr  The position where this token was
     *                                        found.
     * @param int                  $currScope The position of the current scope.
     *
     * @return void
     */
    protected function processTokenWithinScope(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $currScope)
    {
        $methodName = $phpcsFile->getDeclarationName($stackPtr);
        if ($methodName === null) {
            // Ignore closures.
            return;
        }

        // Ignore magic methods.
        if (preg_match('|^__[^_]|', $methodName) !== 0) {
            $magicPart = strtolower(substr($methodName, 2));
            if (isset($this->magicMethods[$magicPart]) === true
                || isset($this->methodsDoubleUnderscore[$magicPart]) === true
            ) {
                return;
            }
        }

        $testName = ltrim($methodName, '_');
        if ($testName !== '' && PHP_CodeSniffer::isCamelCaps($testName, false, true, false) === false) {
            $error     = 'Method name "%s" is not in camel caps format';
            $className = $phpcsFile->getDeclarationName($currScope);
            $errorData = array($className.'::'.$methodName);
            $phpcsFile->addWarning($error, $stackPtr, 'NotCamelCaps', $errorData);
            $phpcsFile->recordMetric($stackPtr, 'CamelCase method name', 'no');
        } else {
            $phpcsFile->recordMetric($stackPtr, 'CamelCase method name', 'yes');
        }

    }//end processTokenWithinScope()


}//end class
