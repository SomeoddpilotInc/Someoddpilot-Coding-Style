# Someoddpilot Javascript Style

All Javascript code should follow the general style outlines.

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

## Modularity

Javascript compontents should be written in a modular fashion. Dependencies should be clear and variables and functions should be encapsulated.

* [Lightweight jQuery Plugin Start](https://github.com/jquery-boilerplate/jquery-patterns/blob/master/patterns/jquery.basic.plugin-boilerplate.js)

Modules should be loaded when required by the scripts they depend on. We use [Browserify][browserify] to compile and concatenate dependencies into a single package.

## Minification

All Javascript code should be built with the expectation that it will be minified before being deployed.

## Bower

Files for front end Javascript modules should be installed via [Bower][bower]. Bower provides an easy way to install, update, and manage dependencies of common front end components.

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

