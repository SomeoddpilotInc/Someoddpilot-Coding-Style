# Someoddpilot Coding Style

## Languages

* [PHP](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/php.md)
* [Javascript](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/javascript.md)
* [HTML](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/html.md)
* [CSS](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/css.md)

## Separation of Concerns

The right things should be done by the right thing in the right place. It sounds at once both intuitive and also like a wicked problem.

### CSS
* Appearance (colors, type)
* Layout (position, columns, sizing)
* Transitions
* Animation

### Javascript
* Interactive behavior
* Feature detection
* Progressive enhancement
* Loading dependencies

### PHP
* Bootstrapping content and data

### Anti-patterns

Javascript should not be used to modify appearance directly. This affects temporarily applied styles and animations. Historically jQuery was used to animate and add style properties. With widespread availability of CSS3 transitions and animations, these CSS level appearance changes should be used as much as possible.

CSS and jQuery selectors should be tag agnostic. This allows flexibility in reuse by adding a class to any tag.

Tables should be used only for tabular data. Use of tables for other data is highly opinionated and makes restyling highly difficult.

Javascript modules should be loaded asynchronously, specifying their dependencies. Historically scripts were loaded through multiple script tags. This historical approach makes assumptions that the correct dependencies will be loaded and without error before execution. Asynchronious loading allows more intelligent dependencie management and encapsulation.

Responsive styling should be done entirely via CSS. Historically Javascript was used to detect window width changes and to apply new styles.

Content should always be sent with the initial HTML. Search engines and other audiences cannot always access content loaded via an interactive layer. Content should only be updated via Javascript, not initially loaded.

## Quotes

You should generally use a double quote for strings:

    var stringVar = "this is a string";

## Tabs

Code MUST use 4 spaces for indenting tabs. This increases readability through visual contrast between nested levels.

## Line length

Lines SHOULD be 85 characters or less. This is a soft limit, as certain syntaxes, minifications, etc require longer lines. But in general, all code should really be less.

## White space

There MUST NOT be trailing whitespace at the end of non-blank lines.

## Statements

There MUST NOT be more than one statement per line.

## Control Structures

The general style rules for control structures are as follows:

* There MUST be one space after the control structure keyword
* There MUST NOT be a space after the opening parenthesis
* There MUST NOT be a space before the closing parenthesis
* There MUST be one space between the closing parenthesis and the opening brace
* The structure body MUST be indented once
* The closing brace MUST be on the next line after the body

## Naming

* Class names MUST be declared in `StudlyCaps`.
* Method names MUST be declared in `camelCase`.

## File Structure

One *Thing*, be it a class, a template, set of CSS styles, should be contained in a single file. It should be named in an appropriate manor. This decreases confusion about where to find and edit these general things and their contents.

## Linters

Code should **always** be linted by the appropriate linter. Sloppy code is dangerous code.

## Comments

Comments are reserved for descriptions of functionality, not legacy code. Old, untested code should be removed. It will live on in our hearts and our source control.

## Package management

### Bower

Use [Bower][bower] to install front end components.

### npm

Use [npm][npm] to install Node.js modules.

## Code Analysis

### Simian

Projects should be run through Simian to find lines of code that are similar. These lines should be refactored.

    -excludes={*.sublime-workspace,node_modules,bower_components}
    -includes={**/,}**/*.{js,php,scss,hbs}
    -formatter=plain:simian.txt
    -threshold=4

## Testing

### Unit Testing

Significan modules should always be unit tested. Unit tests provide a quickly repeatable way to automatically test functionality and prevent newer code from interfering with previous code.

#### Behavior Driven

Interactive modules should be tested with behavior driven tests to ensure that interactivity is functional in all environments through all stages of development.

#### Test Driven

Modules with complex, custom CRUD operations or calculations should be developed using test driven fundamentals.

### Browser Testing

Functionality should be tested in in

* Safari (Latest)
* Chrome (Latest)
* Mozilla (Latest)
* iOS (Latest)
* Android (Latest)
* IE (Latest, 8)

Testing should occur in native, hardware environment, not emulated.

[bower]: http://bower.io/
[npm]: http://www.npmjs.org/
