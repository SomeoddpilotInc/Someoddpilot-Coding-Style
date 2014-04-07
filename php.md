# Someoddpilot PHP Style

PHP code should generally follow the [PEAR coding standards][pearStandards]. These standards provide a good middle ground between readability, conciseness, and stability.

## [PSR-2 Example][psr2Exp]

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

## References

 [pearStandards]: http://pear.php.net/manual/en/standards.php
 [psr2Exp]: http://www.php-fig.org/psr/psr-2/
