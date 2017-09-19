# Someoddpilot CSS Style

You should follow some general standards:

* [MDN - Writing efficient CSS][refMDNCSS]

## Naming

Classes should be hyphen deliminated (e.g. `.foo-bar` not `.foo_bar` or `.fooBar`).

## Stylus

CSS should not be handwritten. It should be preprocessed through [Stylus](http://learnboost.github.io/stylus/) to increase reusabliity, abstraction, and conciseness.

## Property ordering

SOP orders CSS properties by importance. This approach prioritizes and groups different /types/ of CSS rules, in order to present the /most significant/ styles first.

Maintaining this order makes our stylesheets more scannable, and more instructive. Mapping CSS properties according to the significance of their effect shortens the search for any CSS property that drastically changes an element’s position, stacking context, or size.

Mixins, an `@extend`, or variables which output CSS (such as `font-specs(x, x, x)` from `sop-styl`) should be placed at the top of its relevant group.

```styl
// Element's flow in DOM and location
display
position

float
clear

// Element's visibility and stack
opacity
visibility
z-index

// Defined dimensions
width
height

// Box model properties
margin
border
padding

// Changes to document flow
overflow
box-sizing
vertical-align

// Visual appearance
color
background
border-radius

// Text styles
text-align

font-size

// animations
animation
transition
```

[Expanded CSS property order](https://github.com/SomeoddpilotInc/Someoddpilot-Coding-Style/blob/master/index.styl)

### Other examples and inspiration
* [Outside-In CSS Order](https://webdesign.tutsplus.com/articles/outside-in-ordering-css-properties-by-importance--cms-21685)
* [Concentric CSS](https://github.com/brandon-rhodes/Concentric-CSS/blob/master/style.css)
* [Idiomatic CSS](https://github.com/necolas/idiomatic-css)
* [9elements CSS order](http://9elements.com/css-rule-order/)

## Selectors

Always target elements using these techniques in this order:

* Add a specific class to the element
* Add a specific class to the parent and target the element using the parent's class and a child tag name

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
