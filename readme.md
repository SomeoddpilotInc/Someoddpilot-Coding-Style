# Someoddpilot Coding Style

## General Loose Guidlines

### Quotes

You should generally use a single quote for strings:

    var stringVar = 'this is a string';

Only use double quotes when required by syntax (JSON), needed for special characters (\n in PHP), or the number of escape characters would be ridiculously silly (`'\'What if I were double escaping \\'a quote\\'\''` (But that is exorbitantly silly. **Really** don't do that.)).

### Tabs

Code MUST use 4 spaces for indenting tabs. This increases readability through visual contrast between nested levels.

### Line length

Lines SHOULD be 85 characters or less. This is a soft limit, as certain syntaxes, minifications, etc require longer lines. But in general, all code should really be less.

### White space

There MUST NOT be trailing whitespace at the end of non-blank lines.

### Statements

There MUST NOT be more than one statement per line.

### Control Structures

The general style rules for control structures are as follows:

* There MUST be one space after the control structure keyword
* There MUST NOT be a space after the opening parenthesis
* There MUST NOT be a space before the closing parenthesis
* There MUST be one space between the closing parenthesis and the opening brace
* The structure body MUST be indented once
* The closing brace MUST be on the next line after the body

### Naming

* Class names MUST be declared in `StudlyCaps`.
* Method names MUST be declared in `camelCase`.

## File Structure

### One thing per file

One *Thing*, be it a class, a template, set of CSS styles, should be contained in a single file. It should be named in an appropriate manor. This decreases confusion about where to find and edit these general things and their contents.

## Linters

Code should **always** be linted by the appropriate linter. Sloppy code is dangerous code.

### PHP

[PHP CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer/) is a rock solid linter for PEAR standards.

[PHP Mess Detector](http://phpmd.org/) is another vital part of the PHP linting workflow. It tests for unused variables, bugs, suboptimal code, and complicated expressions.

[PHP Coding Standards Fixer](https://github.com/fabpot/PHP-CS-Fixer) should only be used as a last resort, not a tool. You should write your code to standards and only use this tool when formatting legacy code.

### Javascript

[JSHint](http://www.jshint.com/) is arguably the best linter for the language as it additionally measures important things like cyclomatic complexity, number of statements, ect. A list of defaults should be set (globally and for each project). Global variables should be outlined either in the project defaults or on a file by file basis.

## PHP

PHP code should generally follow the [PEAR coding standards](http://pear.php.net/manual/en/standards.php). These standards provide a good middle ground between readability, conciseness, and stability.

#### [PSR-2 Example](http://www.php-fig.org/psr/psr-2/)

    <?php
    namespace Vendor\Package;

    use FooInterface;
    use BarClass as Bar;
    use OtherVendor\OtherPackage\BazClass;

    class Foo extends Bar implements FooInterface
    {
        public function sampleFunction($a, $b = null)
        {
            if ($a === $b) {
                bar();
            } elseif ($a > $b) {
                $foo->bar($arg1);
            } else {
                BazClass::bar($arg2, $arg3);
            }
        }

        final public static function bar()
        {
            // method body
        }
    }
