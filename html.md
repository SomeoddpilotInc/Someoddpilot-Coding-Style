# Someoddpilot HTML Style

Github has some [good general outlines for HTML style](https://github.com/styleguide/templates).

## HTML 5

HTML code should follow HTML 5 standards for all elements.

* HTML 5 Doctype `<!DOCTYPE html>`

## Formatting

* Paragraphs of text should always be placed in a `<p>` tag. Never use multiple `<br>` tags.
* Items in list form should always be in `<ul>`, `<ol>`, or `<dl>`. Never use a set of `<div>` or `<p>`.
* Every form input that has text attached should utilize a <label> tag. Especially radio or checkbox elements.
* Even though quotes around attributes is optional, always put quotes around attributes for readability.
* Avoid writing closing tag comments, like `<!-- /.element -->`. This just adds to page load time. Plus, most editors have indentation guides and open-close tag highlighting.
* Avoid trailing slashes in self-closing elements. For example, `<br>`, `<hr>`, `<img>`, and `<input>`.
* Don't set tabindex manually—rely on the browser to set the order.

## Forms

* Lean towards radio or checkbox lists instead of select menus.
* Wrap radio and checkbox inputs and their text in `<label>`s. No need for for attributes here—the wrapping automatically associates the two.
* Form buttons should always include an explicit type. Use primary buttons for the `type="submit"` button and regular buttons for `type="button"`.
* The primary form button must come first in the DOM, especially for forms with multiple submit buttons. The visual order should be preserved with float: right; on each button.

## Attributes

In order to preserve a short line length, elements with many attributes can be split across lines.

```
<a class="really-long-class-name-that-you-probably-shouldnt-have-used"
  href="http://www.somewhere.com">
```

## Inline Attributes

Inline style and javascript attributes should **NEVER** be used. They are incredibly brittle, hard to maintain, and hard to override.

**Bad**

```
<!-- index.html -->
<div style="background: green;" onclick="alert()"></div>
```

**Good**

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

* Elements&rsquo; roles are clearly defined by classes
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
