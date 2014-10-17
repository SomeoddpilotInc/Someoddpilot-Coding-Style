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

## Grunt

[Grunt][grunt] is a Node based task runner that can perform a number of useful development tasks like minification, concatenization, and documenation.

## Testing

### Jasmine

We use Jasmine for our Javascript unit testing.

## Environments

### Wordpress

#### Enqueueing

Standard, widely used libraries like jQuery, Backbone, and Underscore are available for enqueueing from the Wordpress core. These must absolutely be enqueued using the standard arguments. Plugins and core functionality expects these scripts to be loaded and configured in a particular manner.

#### Globals

Certain values, such as URLs and values set in the admin, should not be assumed to be static. These values should be localized at enqueueing using [wp_localize_script](http://codex.wordpress.org/Function_Reference/wp_localize_script). This is also a useful method for bootstrapping data for Backbone.

```
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
```

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
