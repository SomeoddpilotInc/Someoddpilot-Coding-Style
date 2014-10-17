# Someoddpilot CSS Style

You should follow some general standards:

* [MDN - Writing efficient CSS][refMDNCSS]

## Naming

Classes should be hyphen deliminated (e.g. `.foo-bar` not `.foo_bar` or `.fooBar`).

## Preprocessors

CSS should not be handwritten. It should be preprocessed through [A preprocessor][preprocessor] to increase reusabliity, abstraction, and conciseness. We use [Stylus][stylus] because it integrates nicely with our Node based workflow.

## Bootstrap

The [Twitter Bootstrap 3.0][bootstrap] forms the base of our styling providing great, up to date boilerplate styling which is easy to mold and adapt.

Bootstrap should only be used to a point however. Components should only be augmented lightly. If designs call for more complex, robust components, it would become increasingly difficult to extend Bootstrap's starting point. Be willing to be adventurous!

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

The descendant selector is expensive and over qualified. If nesting of elements change, this selector will no longer work.

## Linter

Use [CSS Lint][cssLint] for linting your CSS.

## Progressive Enhancement

Expect users to not always have the shiniest, latest features of CSS. Provide a stable, usable baseline and add improved appearance when properties are available.

 [sass]: http://sass-lang.com/
 [compass]: compass-style.org
 [cssLint]: http://csslint.net/about.html
 [cssLintID]: https://github.com/stubbornella/csslint/wiki/Disallow-IDs-in-selectors
 [wpCSS]: http://make.wordpress.org/core/handbook/coding-standards/css/#property-ordering
 [refMDNCSS]: https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Writing_efficient_CSS
 [bootstrap]: https://github.com/twbs/bootstrap
 [bootstrapSass]: https://github.com/twbs/bootstrap-sass
