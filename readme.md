# Someoddpilot Coding Style

## Languages

* [PHP](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/php.md)
* [Javascript](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/javascript.md)
* [HTML](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/html.md)
* [CSS](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/css.md)

## Separation of Concerns

> In computer science, separation of concerns (SoC) is a design principle for separating a computer program into distinct sections, such that each section addresses a separate concern.

<cite>&mdash;[Separation of concerns - Wikipedia][socwiki]</cite>

The right things should be done by the right thing in the right place. It sounds at once both intuitive and also like a wicked problem.

### CSS
* Appearance (colors, type)
* Layout (position, columns, sizing)
* Transitions
* Animation

### Javascript
* Changing state
* Querying data
* Feature detection
* Progressive enhancement
* Loading dependencies

### Serverside
* Bootstrapping content and data
* Storing content and data

### Anti-patterns

#### Using Javascript to affect appearance

**Problem**

Javascript should not be used to modify appearance directly. This appies to temporarily applied styles and animations. Historically libraries like jQuery were used to animate and add style properties. With widespread availability of CSS3 transitions and animations, these CSS level appearance changes should be used as much as possible.

**Solution**

Instead of changing style properties directly, classes should be applied and removed to change graphical states.

* [Using CSS Animations - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_animations)

#### Element Selectors

**Problem**

CSS and Javascript allow a wide variety of element selectors, some of which perform poorly, make modularity impossible, or are not widely supported.

**Solution**

CSS and jQuery selectors should be tag agnostic. This allows flexibility in reuse by adding a class to any tag.

* [Writing Efficient CSS - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Writing_efficient_CSS)

#### Tables

**Problem**

Historically, tables were used to create layouts due styling restrictions. However, their layout for data other than tabular data is highly opinionated and makes restyling highly difficult.

**Solution**

Tables should be used only for tabular data.

#### Loading Javascript Synchronously

**Problem**

Traditionally Javascript modules or "scripts" were loaded by inserting a `<script>` element into the page's `head` or `body`. This blocks loading and rendering of other page elements, slowing down the initial load and rendering of a page. This approach makes assumptions that the correct dependencies will be loaded and without error before execution.

**Solution**

Javascript modules should be loaded asynchronously, specifying their dependencies. Use the `async` attribute and requirejs. Asynchronious loading allows more intelligent dependencie management and encapsulation.

* [Critical Rendering Path - Feed the Bot](http://www.feedthebot.com/pagespeed/critical-render-path.html)
* [Critical Rendering Path - Google Fundamentals](https://developers.google.com/web/fundamentals/performance/critical-rendering-path)

#### Responsive Styling

**Problem**

Historically Javascript was used to detect window width changes and to apply new styles. The Javascript used to apply these styles cannot be run until the page is fully loaded, causing a flash of improperly styled content.

**Solution**

Use media queries to detect screen widths.

* [CSS media queries - MDN][cssmdn]

## Conventions

### Tabs

Code MUST use 2 spaces for indenting tabs. (Except for PHP which uses a 4 space standard)

### Line length

Lines SHOULD be 85 characters or less. This is a soft limit, as certain syntaxes, minifications, etc require longer lines. But in general, all code should really be less.

### White space

There MUST NOT be trailing whitespace at the end of non-blank lines.

### Statements

There MUST NOT be more than one statement per line.

**Good**

```
doSomething();
doSomethingElse();
```

**Bad**

```
doSomething();doSomethingElse();
```

### Control Structures

Control structures must follow certain standards. These standards increase readability and comprehension. The general style rules for control structures are as follows:

* There MUST be one space after the control structure keyword
* There MUST NOT be a space after the opening parenthesis
* There MUST NOT be a space before the closing parenthesis
* There MUST be one space between the closing parenthesis and the opening brace
* The structure body MUST be indented once
* The closing brace MUST be on the next line after the body

**Good**

```
if (condition) {
  do(something);
}
```

**Bad**

```
if( condition ){ do(something); }
```

Avoid using `else` statements where possible by using returns. This decreases the complexity of functions.

### Naming

* Class names MUST be declared in `StudlyCaps`.
* Method names MUST be declared in `camelCase`.

**Good**

```
class Example
{
    public function doSomething()
    {
      ...
    }
}
```

**Bad**

```
class example
{
    public function do_something()
    {
      ...
    }
}
```

### File Structure

One *Thing*, be it a class, a template, set of CSS styles, should be contained in a single file. It should be named in an appropriate manor. This decreases confusion about where to find and edit these general things and their contents.

* Files containing classes MUST be named in `StudlyCaps`
* Otherwise, files should be lowercase with hyphen (`-`) separation between words
* File modifications like `gz` and `min` should be separated by a dot `.`

### Comments

Comments are reserved for descriptions of functionality, not legacy code. Old, untested code should be removed. It will live on in our hearts and our source control.

## Linters

Code should **always** be linted by the appropriate linter. Sloppy code is dangerous code.

## Package management

### Bower

Use [Bower][bower] to install front end components.

### npm

Use [npm][npm] to install Node.js modules.

### Composer

Use [composer][composer] to install PHP modules.

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

[socwiki]:  http://en.wikipedia.org/wiki/Separation_of_concerns
[bower]:    http://bower.io/
[npm]:      http://www.npmjs.org/
[composer]: https://getcomposer.org/
[cssmdn]:   https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Media_queries
