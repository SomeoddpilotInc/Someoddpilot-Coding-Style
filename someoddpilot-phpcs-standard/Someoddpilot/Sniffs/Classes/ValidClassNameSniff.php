<?php
/**
 * Someoddpilot_Sniffs_Classes_ValidClassNameSniff.
 *
 * PHP version 5
 *
 */

/**
 * Someoddpilot_Sniffs_Classes_ValidClassNameSniff.
 *
 * Ensures classes are in camel caps, and the first letter is capitalised
 *
 * Exactly like Squiz_Sniffs_Classes_ValidClassNameSniff except it gives a
 * warning instead of an error.
 *
 */
class Someoddpilot_Sniffs_Classes_ValidClassNameSniff extends Squiz_Sniffs_Classes_ValidClassNameSniff
{


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token in the
     *                                        stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        if (isset($tokens[$stackPtr]['scope_opener']) === false) {
            $error = 'Possible parse error: %s missing opening or closing brace';
            $data  = array($tokens[$stackPtr]['content']);
            $phpcsFile->addWarning($error, $stackPtr, 'MissingBrace', $data);
            return;
        }

        // Determine the name of the class or interface. Note that we cannot
        // simply look for the first T_STRING because a class name
        // starting with the number will be multiple tokens.
        $opener    = $tokens[$stackPtr]['scope_opener'];
        $nameStart = $phpcsFile->findNext(T_WHITESPACE, ($stackPtr + 1), $opener, true);
        $nameEnd   = $phpcsFile->findNext(T_WHITESPACE, $nameStart, $opener);
        if ($nameEnd === false) {
            $name = $tokens[$nameStart]['content'];
        } else {
            $name = trim($phpcsFile->getTokensAsString($nameStart, ($nameEnd - $nameStart)));
        }

        // Check for camel caps format.
        $valid = PHP_CodeSniffer::isCamelCaps($name, true, true, false);
        if ($valid === false) {
            $type  = ucfirst($tokens[$stackPtr]['content']);
            $error = '%s name "%s" is not in camel caps format';
            $data  = array(
                      $type,
                      $name,
                     );
            $phpcsFile->addWarning($error, $stackPtr, 'NotCamelCaps', $data);
            $phpcsFile->recordMetric($stackPtr, 'CamelCase class name', 'no');
        } else {
            $phpcsFile->recordMetric($stackPtr, 'CamelCase class name', 'yes');
        }

    }//end process()


}//end class
