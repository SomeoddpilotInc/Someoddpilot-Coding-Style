# Someoddpilot HTML Style

Wordpress has some [good general outlines for HTML style](http://make.wordpress.org/core/handbook/coding-standards/html/).

## HTML 5

HTML code should follow HTML 5 standards for all elements.

* HTML 5 Doctype `<!DOCTYPE html>`

## Inline Attributes

Inline style and javascript attributes should **NEVER** be used. They are incredibly brittle, hard to maintain, and hard to override.

**Bad**

```
<!-- index.html -->
<div style="background: green;" onclick="alert()"></div>
```

**Bad**

```
<!-- index.html -->
<div class="bg-green alert-on-click"></div>

<!-- style.css -->
.bg-green {
  background: green;
}

<!-- script.js -->
jQuery('.alert-on-click').click(function () {
  alert();
});
```

## Inline Blocks

Inline style and script blocks should only be used for critical rendering path operations. Inline style and script blocks block rendering, forcing the browser to wait until they are loaded. These critical elements should only be used for critical styles and functions.

### Reference

* [Critical Rendering Path - Feed the Bot](http://www.feedthebot.com/pagespeed/critical-render-path.html)
* [Critical Rendering Path - Google Fundamentals](https://developers.google.com/web/fundamentals/performance/critical-rendering-path)
