# Someoddpilot Javascript Style

All Javascript code should follow the general style outlines.

## jQuery

What is jQuery?

> jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.
>
> [jquery.com](http://jquery.com/)

What is jQuery not?

jQuery is not a utility for general Javascript patterns. Use it for what it is good for, but leave the rest to more approriate libraries.

## Underscore

Underscore is a great, functional Javascript library.

## Backbone

Backbone is our go to library for MV* pattern Javascript.

## Linter

[JSHint](http://www.jshint.com/) is arguably the best linter for the language as it additionally measures important things like cyclomatic complexity, number of statements, ect. A list of defaults should be set (globally and for each project). Global variables should be outlined either in the project defaults or on a file by file basis.

JSHint provides [a good starting point](https://github.com/jshint/jshint/blob/master/examples/.jshintrc) for a defaults file.

## AMD

Javascript compontents should be written in a modular fashion. Dependencies should be clear and variables and functions should be encapsulated.

* [Lightweight jQuery Plugin Start](https://github.com/jquery-boilerplate/jquery-patterns/blob/master/patterns/jquery.basic.plugin-boilerplate.js)

## Minification

All Javascript code should be built with the expectation that it will be minified before being deployed.

Currently we are using Require.js for managing dependencies and loading Javascript files. Projects should be optimized using the [RequireJS optimization tools](http://requirejs.org/docs/optimization.html) prior to deployment. These tools will combine scripts into discrete, minified packages.

## Environments

### Wordpress

#### Enqueueing

Standard, widely used libraries like jQuery, Backbone, and Underscore are available for enqueueing from the Wordpress core. These must absolutely be enqueued using the standard arguments. Plugins and core functionality expects these scripts to be loaded and configured in a particular manner.

Custom scripts can be loaded either through enqueueing or through an AMD system like [RequireJS](http://requirejs.org/). We are moving towards using AMD modules as much as possible.

Scripts should be enqueued in the functions file (or one of its required files). Scripts should never be enqueued in templates.

#### Globals

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

## Tools

* [RequireJS](http://requirejs.org/)
* [JSHint](http://www.jshint.com/)
* [Bower](http://bower.io)
* [Grunt](http://gruntjs.com/)
* [npm](https://www.npmjs.org/)
* [Node.js](http://nodejs.org/)
* Backbone
* jQuery
* Underscore
