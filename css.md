# Someoddpilot CSS Style

You should follow some general standards:

* [MDN - Writing efficient CSS][refMDNCSS]

## Naming

Classes should be hyphen deliminated (e.g. `.foo-bar` not `.foo_bar` or `.fooBar`).

## SASS (SCSS)

CSS should not be handwritten. It should be preprocessed through [SASS][sass] to increase reusabliity, abstraction, and conciseness.

## Compass

We are experimenting with [Compass][compass] for providing great useful mixins and processing functions. Use it!

## Property ordering

Wordpress has [good standards][wpCSS] for this. Properties should be in this general order:

* Display
* Positioning
* Box model
* Colors and Typography
* Other (transitions, animations, translations)

## Selectors

Always target elements using these techniques in this order:

* Add a specific class to the element
* Add a specific class to the parent and target the element using the parents class and a child tag name

Do not overqualify selectors. Only use as many selectors as are needed to target the element without over specificity or underspecificity.

### Don't use IDs for style selectors

ID selectors are highly targeted, and should be completely unique. While this might be great at first, elements often need to be resued on a page.

[CSSLint][cssLintID] warns against use of ID selectors.

### Don't use descendant selector

The descendant selector is expensive and over qualified. Only use when there is no other way (this is likely in Wordpress wp_nav_menus).

## Linter

Use [CSS Lint][cssLint] for linting your CSS.

## References

 [sass]: http://sass-lang.com/
 [compass]: compass-style.org
 [cssLint]: http://csslint.net/about.html
 [cssLintID]: https://github.com/stubbornella/csslint/wiki/Disallow-IDs-in-selectors
 [wpCSS]: http://make.wordpress.org/core/handbook/coding-standards/css/#property-ordering
 [refMDNCSS]: https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Writing_efficient_CSS
