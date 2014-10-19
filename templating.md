# Templating

## Logic-less

All templates should be logic-less. By design, logic-less templates force you to create abstracted functions which increase reusability, reduce repetition, providing for a better development platform.

Logic-less templates also enforce Separation of Concerns. Controllers are forced to "message" data before sending it to the UI. Changing a template will not disturb the formatting of data as it is simply responsible for the structure and output.

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
