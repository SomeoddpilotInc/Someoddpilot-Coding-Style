## Coding style

### Spacing

* Use soft-tabs with a two space indent. Spaces are the only way to guarantee code renders the same in any person's environment.
* Put line breaks between rulesets.
* When grouping selectors, keep individual selectors to a single line.
* Each declaration should appear on its own line for more accurate error reporting.

### Formatting

* Use hex color codes `#000` unless using `rgba()`.
* Avoid specifying units for zero values, e.g., margin: 0; instead of margin: 0px;.
* Strive to limit use of shorthand declarations to instances where you must explicitly set all the available values.
* Don’t use braces for blocks `{}`. Use indentation instead.
* Don’t use colons `:` to separate properties from values. CSS property names are always clearly in `dash-case`.

### Colors

* Never use color codes directly. Always use core variables with clear color names.
* Always use Stylus helpers like [`alpha`](http://learnboost.github.io/stylus/docs/bifs.html#alphacolor-value) to transform flat, hex colors to rgba and other variants.
* Never declare color variables outside of core.
* Never use duplicate color variables or variables suffixed with numbers. Instead, prefer descriptive names, resorting to `-alt` suffixes.

### Placeholder Variables

* Use placeholder variables for genderic scaffolding to extend and unify basic CSS models (font usage, grids)
* Never use placeholder variables to simply add vendor prefixes

### Misc

* As a rule of thumb, avoid unnecessary nesting. At most, aim for three levels. If you cannot help it, step back and rethink your overall strategy (either the specificity needed, or the layout of the nesting).

## Pixels vs. ems

* Use `em` for font-size, because it offers scalable control over text.
