# Conventions

### Tabs

Code MUST use 2 spaces for indenting tabs.

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

if (condition) do(something);
```

Avoid using `else` statements where possible by using returns. This decreases the complexity of functions.

**Okay**
```
if (foo) {
  bar();
} else {
  baz();
}
```

**Better**
```
if (foo) {
  bar();
  return;
}
baz();
```

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

### Directory Structure

Discrete modules should be grouped together. Templates, classes, services, factories, etc that are highly linked conceptually should be grouped together in a directory.

```
+-- home
|   |
|   + index.html
|   |
|   + homeDirective.js
|
+-- news
    |
    + index.html
    |
    + newsService.js
```

### Comments

Comments are reserved for descriptions of functionality, not legacy code. Old, untested code should be removed. It will live on in our hearts and our source control.

### Duplications/convenience

Never duplicate functionality for the convenience of a shorter name.
