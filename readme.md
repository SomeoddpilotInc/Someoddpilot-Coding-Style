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

