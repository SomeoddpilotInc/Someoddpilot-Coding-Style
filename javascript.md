# Someoddpilot Javascript Style

All Javascript code should follow the general style outlines.

## Style Guide

We generally follow [Felix Geisendörfer’s Node.js Style Guide](https://github.com/felixge/node-style-guide) for all Javascript code (client and server).

### Use Semicolons

Semicolons are important in clarifying syntax. “Don’t abuse error correction mechanisms for cheap syntactic pleasures.”

## Method chaining

One method per line should be used if you want to chain methods.

You should also indent these methods so it's easier to tell they are part of the same chain.

*Right:*

```js
User
  .findOne({ name: 'foo' })
  .populate('bar')
  .exec(function(err, user) {
    return true;
  });
````

*Wrong:*

```js
User
.findOne({ name: 'foo' })
.populate('bar')
.exec(function(err, user) {
  return true;
});

User.findOne({ name: 'foo' })
  .populate('bar')
  .exec(function(err, user) {
    return true;
  });

User.findOne({ name: 'foo' }).populate('bar')
.exec(function(err, user) {
  return true;
});

User.findOne({ name: 'foo' }).populate('bar')
  .exec(function(err, user) {
    return true;
  });
````

## Declare one variable per var statement

Declare one variable per var statement, it makes it easier to re-order the
lines.

*Right:*

```js
var keys   = ['foo', 'bar'];
var values = [23, 42];

var object = {};
while (keys.length) {
  var key = keys.pop();
  object[key] = values.pop();
}
```

*Wrong:*

```js
var keys = ['foo', 'bar'],
    values = [23, 42],
    object = {},
    key;

while (keys.length) {
  key = keys.pop();
  object[key] = values.pop();
}
```

## Object / Array creation

Use trailing commas and put *short* declarations on a single line. Only quote
keys when your interpreter complains:

*Right:*

```js
var a = ['hello', 'world'];
var b = {
  good: 'code',
  'is generally': 'pretty',
};
```

*Wrong:*

```js
var a = [
  'hello', 'world'
];
var b = {"good": 'code'
        , is generally: 'pretty'
        };
```

## Use the === operator

Programming is not about remembering [stupid rules][comparisonoperators]. Use
the triple equality operator as it will work just as expected.

*Right:*

```js
var a = 0;
if (a !== '') {
  console.log('winning');
}

```

*Wrong:*

```js
var a = 0;
if (a == '') {
  console.log('losing');
}
```

[comparisonoperators]: https://developer.mozilla.org/en/JavaScript/Reference/Operators/Comparison_Operators

## Use multi-line ternary operator

The ternary operator should not be used on a single line. Split it up into multiple lines instead.

*Right:*

```js
var foo = (a === b)
  ? 1
  : 2;
```

*Wrong:*

```js
var foo = (a === b) ? 1 : 2;
```

## Do not extend built-in prototypes

Do not extend the prototype of native JavaScript objects. Your future self will
be forever grateful.

*Right:*

```js
var a = [];
if (!a.length) {
  console.log('winning');
}
```

*Wrong:*

```js
Array.prototype.empty = function() {
  return !this.length;
}

var a = [];
if (a.empty()) {
  console.log('losing');
}
```

## Use descriptive conditions

Any non-trivial conditions should be assigned to a descriptively named variable or function:

*Right:*

```js
var isValidPassword = password.length >= 4 && /^(?=.*\d).{4,}$/.test(password);

if (isValidPassword) {
  console.log('winning');
}
```

*Wrong:*

```js
if (password.length >= 4 && /^(?=.*\d).{4,}$/.test(password)) {
  console.log('losing');
}
```

## Write small functions

Keep your functions short. A good function fits on a slide that the people in
the last row of a big room can comfortably read. So don't count on them having
perfect vision and limit yourself to ~15 lines of code per function.

## Return early from functions

To avoid deep nesting of if-statements, always return a function's value as early
as possible.

*Right:*

```js
function isPercentage(val) {
  if (val < 0) {
    return false;
  }

  if (val > 100) {
    return false;
  }

  return true;
}
```

*Wrong:*

```js
function isPercentage(val) {
  if (val >= 0) {
    if (val < 100) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}
```

Or for this particular example it may also be fine to shorten things even
further:

```js
function isPercentage(val) {
  var isInRange = (val >= 0 && val <= 100);
  return isInRange;
}
```

## Name your closures

Feel free to give your closures a name. It shows that you care about them, and
will produce better stack traces, heap and cpu profiles.

*Right:*

```js
req.on('end', function onEnd() {
  console.log('winning');
});
```

*Wrong:*

```js
req.on('end', function() {
  console.log('losing');
});
```

## No nested closures

Use closures, but don't nest them. Otherwise your code will become a mess.

*Right:*

```js
setTimeout(function() {
  client.connect(afterConnect);
}, 1000);

function afterConnect() {
  console.log('winning');
}
```

*Wrong:*

```js
setTimeout(function() {
  client.connect(function() {
    console.log('losing');
  });
}, 1000);
```

## jQuery

What is jQuery?

> jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.
>
> [jquery.com][jquery]

What is jQuery not?

* a utility for general Javascript patterns
* a good animation library
* a solid framework for a rich, layered, modular application

## Underscore and Lodash

Underscore is a great, functional Javascript library. It provides cross browser methods for many future improvements to Javascript.

[Docs][underscore]

Lodash is Underscore's more elegant, improved descendant. In most every case, it can be dropped in as a replacement.

## Linter

[JSHint][jshint] is arguably the best linter for the language as it additionally measures important things like cyclomatic complexity, number of statements, ect. A list of defaults should be set (globally and for each project). Global variables should be outlined either in the project defaults or on a file by file basis.

JSHint provides [a good starting point][jshintDefaults] for a defaults file.

## AngularJS

AngularJS extends HTML’s vocabularity using Javascript to allow quick and flexible development of rich web applications.

## Modularity

Javascript compontents should be written in a modular fashion. Dependencies should be clear and variables and functions should be encapsulated.

* [Lightweight jQuery Plugin Start](https://github.com/jquery-boilerplate/jquery-patterns/blob/master/patterns/jquery.basic.plugin-boilerplate.js)

Modules should be loaded when required by the scripts they depend on. We use [Browserify][browserify] to compile and concatenate dependencies into a single package.

## Minification

All Javascript code should be built with the expectation that it will be minified before being deployed.

## Node

[Node][node] is a powerful server-side version of Javascript. Many useful development tools are built on node.

## npm

[npm][npm] is the standard Node.js package manager. It provides an excellent way to install and manage Javascript packages.

## Gulp

[Gulp](http://gulpjs.com) is a Node based task runner that can perform a number of useful development tasks like minification, concatenization, and documenation.

## Environments

### Wordpress

#### Globals

Certain values, such as URLs and values set in the admin, should not be assumed to be static. These values should be localized.

```
<script>
var fooConfig = <?php echo json_encode(array("bar" => "baz")); ?>;
</script>
```

## Style Guide

### Google’s Javascript Style Guide

[Google’s Javascript Style Guide](https://google-styleguide.googlecode.com/svn/trunk/javascriptguide.xml) is an excellend resource to follow for most Javascript style concerns.

[npm]: https://www.npmjs.org/
[node]: http://nodejs.org/
[grunt]: http://gruntjs.com/
[bower]: http://bower.io
[requirejs]: http://requirejs.org/
[requirejsOptim]: http://requirejs.org/docs/optimization.html
[jshint]: http://www.jshint.com/
[jshintDefaults]: https://github.com/jshint/jshint/blob/master/examples/.jshintrc
[backbone]: http://backbonejs.org
[jquery]: http://jquery.com
[underscore]: http://underscorejs.org

## Reference

