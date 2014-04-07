# Someoddpilot Javascript Style

All Javascript code should follow the general style outlines.

## Linter

[JSHint](http://www.jshint.com/) is arguably the best linter for the language as it additionally measures important things like cyclomatic complexity, number of statements, ect. A list of defaults should be set (globally and for each project). Global variables should be outlined either in the project defaults or on a file by file basis.

## Environments

### Wordpress

#### Enqueueing

Standard, widely used libraries like jQuery, Backbone, and Underscore are available for enqueueing from the Wordpress core. These must absolutely be enqueued using the standard arguments. Plugins and core functionality expects these scripts to be loaded and configured in a particular manner.

Custom scripts can be loaded either through enqueueing or through an AMD system like [RequireJS](http://requirejs.org/docs/start.html). We are moving towards using AMD modules as much as possible.

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
