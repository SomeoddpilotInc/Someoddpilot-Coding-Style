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

Inline style and script blocks should only be used for critical rendering path operations. Inline style and script blocks block rendering, forcing the browser to wait until they are loaded. These critical elements should only be used for critical styles and functions. The contents of these blocks should be created by importing the contents of a file, not directly coded into a view file.

## Structure

There are two types of content in contemporary HTML: structured and unstructured. Different strategies should be applied to these two approaches to structure.

### Structured Content

Structured content is created using granular data in a predictable, programmed manner. The input for this data would be separated into multiple inputs, retaining each piece of critical data in an individual field. The resulting output structure can be predicted throroughly and thus be very well structured.

Classes should be used frequently both as a semantic labeling device and for styling.

### Unstructured Content

Unstructured content is content created by loose controls by the user. The input for this data could be a text field, a WYSIWYG editor, or another form of input. The structure of the content is highly irregular and indeterminate. While it may be possible to predict the types of things that could occur in the content, the order and organization of the content should be considered unknown.

Only predictable selectors (`a`, `h{1-6}`, `strong`, `em`, etc) should be used for styling. If classes can also be predicted, these should be used, but with care.

### In Practice

**Bad**

This HTML is bad because:

* Elements&rsquo; roles are ambigeous
* Unstructured content is hard to select and style

```
<div>
  <header>
    <h1>Title</h1>
  </header>
  <p>Lorem ipsum</p>
</div>
```

**Good**

This HTML is good because:

* Element&rsquo; roles are clearly defined by classes
* Unstructured content is contained allowing loose targeting

```
<div class="post">
  <header class="post-header">
    <h1 class="post-title">
      Title
    </h1>
  </header>
  <div class="post-content">
    <p>Lorem ipsum</p>
  </div>
</div>
```

### Reference

* [Critical Rendering Path - Feed the Bot](http://www.feedthebot.com/pagespeed/critical-render-path.html)
* [Critical Rendering Path - Google Fundamentals](https://developers.google.com/web/fundamentals/performance/critical-rendering-path)
