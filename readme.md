# Someoddpilot Coding Style

## Principles

Some basic principals apply to all programming, regardless of language.

[Basic Programming Principles](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/principles.md)

## Languages

* [PHP](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/php.md)
* [Javascript](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/javascript.md)
* [HTML](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/html.md)
* [CSS](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/css.md)

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

### Tasks

All common tasks should be automated and configurable. Use [Grunt][grunt] to create tasks which can be run via the command line or by watching a set of files.

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

[drywiki]:        http://en.wikipedia.org/wiki/Don%27t_repeat_yourself
[kisswiki]:       http://en.wikipedia.org/wiki/KISS_principle
[ocpwiki]:        http://en.wikipedia.org/wiki/Open_Closed_Principle
[srpwiki]:        http://en.wikipedia.org/wiki/Single_responsibility_principle
[coupwiki]:       http://en.wikipedia.org/wiki/Coupling_(computer_programming)
[socwiki]:        http://en.wikipedia.org/wiki/Separation_of_concerns
[mdncssan]:       https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_animations
[mdneffcss]:      https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Writing_efficient_CSS
[fbcriticalpath]: http://www.feedthebot.com/pagespeed/critical-render-path.html
[gfcriticalpath]: https://developers.google.com/web/fundamentals/performance/critical-rendering-path
[cssmdn]:         https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Media_queries
[bower]:          http://bower.io/
[npm]:            http://www.npmjs.org/
[composer]:       https://getcomposer.org/
[grunt]:          http://gruntjs.com
