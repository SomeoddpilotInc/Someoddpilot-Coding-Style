# Someoddpilot CSS Style

You should follow some general standards:

* [MDN - Writing efficient CSS][refMDNCSS]

## Naming

Classes should be hyphen deliminated (e.g. `.foo-bar` not `.foo_bar` or `.fooBar`).

## Stylus

CSS should not be handwritten. It should be preprocessed through [Stylus](http://learnboost.github.io/stylus/) to increase reusabliity, abstraction, and conciseness.

## Property ordering

Properties should be in this general order:

* Display
* Positioning
* Box model
* Colors and Typography
* Other (transitions, animations, translations)

This ordering help clarify how an element relates with other models first, then its more isolated style attributes.

## Selectors

Always target elements using these techniques in this order:

* Add a specific class to the element
* Add a specific class to the parent and target the element using the parents class and a child tag name

Do not overqualify selectors. Only use as many selectors as are needed to target the element without over specificity or underspecificity.

Bad
```
div#something
  ...

div.something
  ...
```

### Don't use IDs for style selectors

ID selectors are highly targeted, and should be completely unique. While this might be great at first, elements often need to be resued on a page.

[CSSLint][cssLintID] warns against use of ID selectors.

### Don't use descendant selector

The descendant selector is expensive and over qualified. If nesting of elements changes, this selector will no longer work.

### Avoid element selector

The element selector is highly tied to a specific use case. Frequently styles will need to be applied to different elements that fulfill different functions.

## Linter

Use [CSS Lint][cssLint] for linting your CSS.

## Progressive Enhancement

Expect users to not always have the shiniest, latest features. Provide a stable, usable baseline and add improved appearance when properties are available.

[Can I use](http://caniuse.com/) is a good reference for what properties are available across most browsers.

## Reference

* [Google’s CSS Style Guide](https://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml)
* [Wordpress’ CSS Style Guide](http://make.wordpress.org/core/handbook/coding-standards/css/)

 [cssLint]: http://csslint.net/about.html
 [cssLintID]: https://github.com/stubbornella/csslint/wiki/Disallow-IDs-in-selectors
 [wpCSS]: http://make.wordpress.org/core/handbook/coding-standards/css/#property-ordering
 [refMDNCSS]: https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Writing_efficient_CSS
 [bootstrap]: https://github.com/twbs/bootstrap
 [bootstrapSass]: https://github.com/twbs/bootstrap-sass
