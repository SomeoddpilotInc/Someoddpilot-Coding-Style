# Principles

Some basic principals apply to all programming, regardless of language.

## DRY (Don't repeat yourself)

Do something once. Grin and bear it when you do it again. If you do it three times, find an abstraction.

Use loops, functions, classes, etc to avoid repetition.

* [DRY - Wikipedia](http://en.wikipedia.org/wiki/Don%27t_repeat_yourself)

## KISS (Keep it simple, stupid)

Avoid complexity. Simpler methods, classes, etc make code easier to understand, abstract, and modify. Make things as simple as they need to be.

* [KISS - Wikipedia](http://en.wikipedia.org/wiki/KISS_principle)

## Open/Closed Principle

Things should be extendable, but not directly modifiable. Create abstracted things with interfaces that can be modified later.

* [Open Closed Principal - Wikipedia](http://en.wikipedia.org/wiki/Open_Closed_Principle)

## Single Responsibility Principle

Each thing, be it a class or a method, should do one task and do it well.

* [Single Responsibility Principle - Wikipedia](http://en.wikipedia.org/wiki/Single_responsibility_principle)

## Loose Coupling

Minimize the number of dependencies and assumptions for each module.

* [Coupling - Wikipedia](http://en.wikipedia.org/wiki/Coupling_(computer_programming))

## Maximize Cohesion

Similar functionality should be found within the same component.

* [Cohesion - Wikipedia](http://en.wikipedia.org/wiki/Cohesion_(computer_science))

## Hide Implementation Details

Modules should only need to understand the things they affect, avoiding affecting other implementations.

* [Information Hiding - Wikipedia](http://en.wikipedia.org/wiki/Information_Hiding)

## Law of Demeter

Components should only communicate with direct relations. Avoid passing through unused data and chaining communication through modules.

**Bad**

```
anElement.addEventListener('click', function (event) {
  doSomething(event);
});

function doSomething(event) {
  doSomethingElse(event.target);
}
```

**Good**

```
anElement.addEventListener('click', function (event) {
  doSomething(event.target);
});

function doSomething(element) {
  doSomethingElse(element);
}
```

* [Law of Demeter - Wikipedia](http://en.wikipedia.org/wiki/Law_of_Demeter)

## Avoid Premature Optimization

Don't worry about optimization until code is working but slower than needed.

>  "We should forget about small efficiencies, say about 97% of the time: premature optimization is the root of all evil"
<cite>- Donald Knuth</cite>

* [Program Optimization - Wikipedia](http://en.wikipedia.org/wiki/Program_optimization)

## Separation of Concerns

> In computer science, separation of concerns (SoC) is a design principle for separating a computer program into distinct sections, such that each section addresses a separate concern.

<cite>&mdash;[Separation of concerns - Wikipedia](http://en.wikipedia.org/wiki/Separation_of_concerns)</cite>

The right things should be done by the right thing in the right place. Modules' responsibilities should overlap as little as possible. It sounds at once both intuitive and also like a wicked problem.

### CSS
* Appearance (colors, type)
* Layout (position, columns, sizing)
* Transitions
* Animation

### Javascript
* Changing state
* Querying data
* Feature detection
* Progressive enhancement
* Loading dependencies

### Server Side
* Bootstrapping content and data
* Storing content and data

### Anti-patterns

#### Using Javascript to affect appearance

**Problem**

Javascript should not be used to modify appearance directly. This appies to temporarily applied styles and animations. Historically libraries like jQuery were used to animate and add style properties. With widespread availability of CSS3 transitions and animations, these CSS level appearance changes should be used as much as possible.

**Solution**

Instead of changing style properties directly, classes should be applied and removed to change graphical states.

* [Using CSS Animations - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_animations)

#### Element Selectors

**Problem**

CSS and Javascript allow a wide variety of element selectors, some of which perform poorly, make modularity impossible, or are not widely supported.

**Solution**

CSS and jQuery selectors should be tag agnostic. This allows flexibility in reuse by adding a class to any tag.

* [Writing Efficient CSS - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Writing_efficient_CSS)

#### Tables

**Problem**

Historically, tables were used to create layouts due styling restrictions. However, their layout for data other than tabular data is highly opinionated and makes restyling highly difficult.

**Solution**

Tables should be used only for tabular data. Marginally tabular data should be represented via looser tables created using `display: table{-cell,-row}` as this layout can then be easily transformed for smaller breakpoints.

#### Loading Javascript Synchronously

**Problem**

Traditionally Javascript modules or "scripts" were loaded by inserting a `<script>` element into the page's `head` or `body`. This blocks loading and rendering of other page elements, slowing down the initial load and rendering of a page. This approach makes assumptions that the correct dependencies will be loaded and without error before execution.

**Solution**

Javascript modules should be loaded asynchronously, specifying their dependencies. Use the `async` attribute and requirejs. Asynchronious loading allows more intelligent dependencie management and encapsulation.

* [Critical Rendering Path - Feed the Bot](http://www.feedthebot.com/pagespeed/critical-render-path.html)
* [Critical Rendering Path - Google Fundamentals](https://developers.google.com/web/fundamentals/performance/critical-rendering-path)

#### Responsive Styling

**Problem**

Historically Javascript was used to detect window width changes and to apply new styles. The Javascript used to apply these styles cannot be run until the page is fully loaded, causing a flash of improperly styled content.

**Solution**

Use media queries to detect screen widths.

* [CSS media queries - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Media_queries)

## Resources

* [Code Complete - Steve McConnell](http://www.amazon.com/Code-Complete-Practical-Handbook-Construction/dp/0735619670)
