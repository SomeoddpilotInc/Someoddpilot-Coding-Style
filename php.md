# Someoddpilot PHP Style

PHP code should follow all general styles outlined [here](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/readme.md).

PHP code should generally follow the [PSR-2 coding standards](http://www.php-fig.org/psr/psr-2/). These standards provide a good middle ground between readability, conciseness, and stability.

#### [PSR-2 Example][psr2Exp]

```
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
```

## Linter

[PHP CodeSniffer][phpCS] is a rock solid linter for PHP standards. There is a custom [coding standard](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Coding-Standard-Tutorial) that reflects many of the standards described in this document. You can learn how to use it with PHP CodeSniffer by reading the standard's [README](../someoddpilot-phpcs-standard/README.md).

[PHP Mess Detector][phpMD] is another vital part of the PHP linting workflow. It tests for unused variables, bugs, suboptimal code, and complicated expressions.

[PHP Copy Paste Detector](https://github.com/sebastianbergmann/phpcpd) looks for portions of PHP code which are highly similar and candidates for refactoring.

[PHP Coding Standards Fixer][phpCSF] should only be used as a last resort, not a frequent tool. You should write your code to standards and only use this tool when formatting legacy code.

## Environments

Certain environments necessitate different standards.

### Wordpress

Wordpress has its own recommended coding standards for PHP. Some of these are specific to Wordpress patterns, some are general PHP formats. Some of these standards are great. Some are terrible.

#### Space Usage

> Always put spaces after commas, and on both sides of logical, comparison, string and assignment operators.
>
> <cite>&ndash; [make.wordpress.com][makeWpSpace]</cite>

DO NOT FOLLOW THIS STANDARD. It leads to wide, over-readable code. Your lines should be simple enough that they are readable without inflating them with spaces.

Good
```
$variable = (empty($foo)) ? $bar->baz('woo') : array();
```

Bad
```
$variable = ( empty( $foo ) ) ? $bar->baz( 'woo' ) : array ();
```

#### Naming Conventions

> Use lowercase letters in variable, action, and function names (never camelCase). Separate words via underscores.
>
> <cite>&ndash; [make.wordpress.com][makeWpName]</cite>

DO NOT FOLLOW THIS STANDARD. It goes against most good coding standards. Underscore use inflates line length and provides little more readability than camel or studly case.

Good
```
$theVariable = $anInstance->someMethod();
```

Bad
```
$the_variable = $an_instance->some_method();
```

#### Yoda Conditions

> When doing logical comparisons, always put the variable on the right side, constants or literals on the left.
>
> <cite>&ndash; [make.wordpress.com][makeWpYoda]</cite>

DO try to follow this standard. It might feel backward, but it provides a stop gap for mistakenly modifying a variable.

#### Enqueuing

The jury is out on enqueuing. Its a great practice as a baseline, but interferes with AMD. Frequently loaded libraries (jQuery) which are modified by plugins (what a terrible practice), should still be enqueued. An AMD shim should be used in place.

#### Templating

Wordpress provides no standard method of templating.

[Timber][timber] provides an excellent solution of interfacing Symfony's [Twig][twig] with Wordpress.

#### Plugins

Plugins should only be used for large, extensive features that are difficult to program and are not available in the Wordpress core. Plugins should also have extensive documentation and a great track record.

Modifying table columns, adding custom post types, and other modifications can all be done through the Wordpress core and should not require a plugin.

Use a plugin's functions, actions, and filters over admin UI controls. Database settings and their controls can get warped, deleted, updated, etc. and are hard to source control and document.

##### [Advanced Custom Fields][acf]

Custom meta fields for posts, taxonomies, and options.

Custom fields should always be exported out before production.

##### [Gravity Forms][gf]

Contact forms creation and submission handler.

There are a number of extensions for user registration, Mailchimp signup, Paypal integration.

##### [WPML][wpml]

Multilingual content manager.

This is not a plugin for managing hard coded translations. That should be handled by Wordpress' core __ functions.

There are some problems with this plugin, so it should be used with caution.

##### [W3 Total Cache][w3cache]

Caching.

A little too much for the average user, and tends to confuse users. We're looking to replace this.

##### [JSON API][jsonapi]

A RESTful API for accessing posts and taxonomies.

The API makes many common AJAX tasks incredibly easy without dealing with the mess of wp_ajax_actions.

 [psr2Exp]: http://www.php-fig.org/psr/psr-2/
 [phpCS]: http://pear.php.net/package/PHP_CodeSniffer/
 [phpMD]: http://phpmd.org/
 [phpCSF]: https://github.com/fabpot/PHP-CS-Fixer
 [makeWpSpace]: http://make.wordpress.org/core/handbook/coding-standards/php/#space-usage
 [makeWpName]: http://make.wordpress.org/core/handbook/coding-standards/php/#naming-conventions
 [makeWpYoda]: http://make.wordpress.org/core/handbook/coding-standards/php/#yoda-conditions
 [acf]: http://www.advancedcustomfields.com/
 [gf]: http://www.gravityforms.com/
 [wpml]: http://wpml.org/
 [w3cache]: https://wordpress.org/plugins/w3-total-cache/
 [jsonapi]: wordpress.org/plugins/json-api/
