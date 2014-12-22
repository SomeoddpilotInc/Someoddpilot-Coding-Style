Templating
==========

Transform, Iterate, Conditional
-------------------------------

Templates should only transform, iterate over, and respond conditionally to data. By design, restricting templates will force you to create abstracted functions which increase reusability, reduce repetition, and provide for a better development platform.

Restricting templates to these functions also enforces Separation of Concerns. Controllers are forced to "massage" data before sending it to the UI. Changing a template will not disturb the formatting of data as it is simply responsible for the structure and output. Similarly, minor changes to how the data is fetch will not affect how it is rendered.

## Engines

### Javascript

* [Mustache](http://mustache.github.io/mustache.5.html)
* [Handlebars](http://handlebarsjs.com/)

### PHP

* [Mustache](http://mustache.github.io/mustache.5.html)
* [Handlebars](https://github.com/XaminProject/handlebars.php)

## Custom

If an engine isn't available, the above still applies. Use limited function calls and conditional statements.

## Reference

* [What's the advantage of Logic-less template - StackOverflow](http://stackoverflow.com/questions/3896730/whats-the-advantage-of-logic-less-template-such-as-mustache)
