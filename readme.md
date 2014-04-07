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

### File Structure

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

## CSS

You should follow some general standards:

* [MDN - Writing efficient CSS][refMDNCSS]

### Naming

Classes should be hyphen deliminated (e.g. `.foo-bar` not `.foo_bar` or `.fooBar`).

### SASS (SCSS)

CSS should not be handwritten. It should be preprocessed through [SASS](http://sass-lang.com/) to increase reusabliity, abstraction, and conciseness.

### Compass

We are experimenting with [Compass](compass-style.org) for providing great useful mixins and processing functions. Use it!

### Property ordering

Wordpress has [good standards][wpCSS] for this. Properties should be in this general order:

* Display
* Positioning
* Box model
* Colors and Typography
* Other (transitions, animations, translations)

### Selectors

Always target elements using these techniques in this order:

* Add a specific class to the element
* Add a specific class to the parent and target the element using the parents class and a child tag name

Do not overqualify selectors. Only use as many selectors as are needed to target the element without over specificity or underspecificity.

#### Don't use IDs for style selectors

ID selectors are highly targeted, and should be completely unique. While this might be great at first, elements often need to be resued on a page.

[CSSLint][cssLintID] warns against use of ID selectors.

#### Don't use descendant selector

The descendant selector is expensive and over qualified. Only use when there is no other way (this is likely in Wordpress wp_nav_menus).

## Environments

Certain environments necessitate different standards.

### Wordpress

#### PHP

Wordpress has its own recommended coding standards for PHP. Some of these are specific to Wordpress patterns, some are general PHP formats. Some of these standards are great. Some are terrible.

##### [Space Usage](http://make.wordpress.org/core/handbook/coding-standards/php/#space-usage)

**DO NOT FOLLOW THIS STANDARD**. It leads to wide, over-readable code. Your lines should be simple enough that they are readable without inflating them with spaces.

##### [Naming Conventions](http://make.wordpress.org/core/handbook/coding-standards/php/#naming-conventions)

**DO NOT FOLLOW THIS STANDARD**. It goes against most good coding standards. Underscore use inflates line length and provides little more readability than camel or studly case.

##### [Yoda Conditions](http://make.wordpress.org/core/handbook/coding-standards/php/#yoda-conditions)

**DO** try to follow this standard. It might feel backward, but it provides a stop gap for mistakenly modifying a variable.

#### Javascript

##### Enqueueing

Standard, widely used libraries like jQuery, Backbone, and Underscore are available for enqueueing from the Wordpress core. These must absolutely be enqueued using the standard arguments. Plugins and core functionality expects these scripts to be loaded and configured in a particular manner.

Custom scripts can be loaded either through enqueueing or through an AMD system like [RequireJS](http://requirejs.org/docs/start.html). We are moving towards using AMD modules as much as possible.

Scripts should be enqueued in the functions file (or one of its required files). Scripts should never be enqueued in templates.

##### Globals

Certain values, such as URLs and values set in the admin, should not be assumed to be static. These values should be localized at enqueueing using [wp_localize_script](http://codex.wordpress.org/Function_Reference/wp_localize_script). This is also a useful method for bootstrapping data for Backbone.

    <?php

    wp_register_script('some-handle', 'path/to/myscript.js');

    $translation_array = array(
        'someString' => __('Some string to translate'),
        'aValue' => '10'
    );

    wp_localize_script(
        'some-handle',
        'objectName',
        $translation_array
    );

    // The script can be enqueued now or later.
    wp_enqueue_script('some-handle');
    ?>
 [cssLintID]: https://github.com/stubbornella/csslint/wiki/Disallow-IDs-in-selectors
 [wpCSS]: http://make.wordpress.org/core/handbook/coding-standards/css/#property-ordering
 [refMDNCSS]: https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Writing_efficient_CSS
