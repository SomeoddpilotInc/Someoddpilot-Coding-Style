# Someoddpilot PHP Style

PHP code should follow all general styles outlined [here](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/readme.md).

PHP code should generally follow the [PEAR coding standards][pearStandards]. These standards provide a good middle ground between readability, conciseness, and stability.

#### [PSR-2 Example][psr2Exp]

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

## Linter

[PHP CodeSniffer][phpCS] is a rock solid linter for PEAR standards.

[PHP Mess Detector][phpMD] is another vital part of the PHP linting workflow. It tests for unused variables, bugs, suboptimal code, and complicated expressions.

[PHP Coding Standards Fixer][phpCSF] should only be used as a last resort, not a tool. You should write your code to standards and only use this tool when formatting legacy code.

## Environments

Certain environments necessitate different standards.

### Wordpress

Wordpress has its own recommended coding standards for PHP. Some of these are specific to Wordpress patterns, some are general PHP formats. Some of these standards are great. Some are terrible.

#### Space Usage

> Always put spaces after commas, and on both sides of logical, comparison, string and assignment operators.
>
> <cite>&ndash; [make.wordpress.com][makeWpSpace]</cite>

DO NOT FOLLOW THIS STANDARD. It leads to wide, over-readable code. Your lines should be simple enough that they are readable without inflating them with spaces.

#### Naming Conventions

> Use lowercase letters in variable, action, and function names (never camelCase). Separate words via underscores.
>
> <cite>&ndash; [make.wordpress.com][makeWpName]</cite>

DO NOT FOLLOW THIS STANDARD. It goes against most good coding standards. Underscore use inflates line length and provides little more readability than camel or studly case.

#### Yoda Conditions

> When doing logical comparisons, always put the variable on the right side, constants or literals on the left.
>
> <cite>&ndash; [make.wordpress.com][makeWpYoda]</cite>

DO try to follow this standard. It might feel backward, but it provides a stop gap for mistakenly modifying a variable.

 [pearStandards]: http://pear.php.net/manual/en/standards.php
 [psr2Exp]: http://www.php-fig.org/psr/psr-2/
 [phpCS]: http://pear.php.net/package/PHP_CodeSniffer/
 [phpMD]: http://phpmd.org/
 [phpCSF]: https://github.com/fabpot/PHP-CS-Fixer
 [makeWpSpace]: http://make.wordpress.org/core/handbook/coding-standards/php/#space-usage
 [makeWpName]: http://make.wordpress.org/core/handbook/coding-standards/php/#naming-conventions
 [makeWpYoda]: http://make.wordpress.org/core/handbook/coding-standards/php/#yoda-conditions
