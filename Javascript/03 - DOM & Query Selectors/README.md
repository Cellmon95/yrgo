<img src="https://media.giphy.com/media/BJmTtZL4hova8/giphy.gif" width="100%">

# 03 - DOM & Query Selectors

The Document Object Model (DOM) is an application programming interface (API) for manipulating HTML and XML documents. The DOM represents a document as a tree of nodes. It provides API that allows you to add, remove, and modify parts of the document effectively.

- :scissors: Examples

    - [`class-list.js`](examples/class-list.js)

    - [`inner-html.js`](examples/inner-html.js)

    - [`iterate-elements.js`](examples/iterate-elements.js)

    - [`style.js`](examples/style.js)

    - [`query-selector.js`](examples/query-selector.js)

    - [`text-content.js`](examples/text-content.js)

    - [`create-element.js`](examples/create-element.js)

    - [`remove-element.js`](examples/remove-element.js)

*   :books: Documentation

    - [QuerySelector](https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector)

    - [QuerySelectorAll](https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll)

    - [Style](https://developer.mozilla.org/en-US/docs/Web/API/ElementCSSInlineStyle/style)

    - [ClassList](https://devdocs.io/dom/element/classlist)

    - [Node](https://developer.mozilla.org/en-US/docs/Web/API/Node)

- :link: Links

    - [Altering the DOM](https://zellwk.com/blog/js-in-dom/)

    - [Adding, removing and toggling classes](https://www.digitalocean.com/community/tutorials/js-classlist)

    - [Update text content](https://attacomsian.com/blog/javascript-update-element-text)

- :headphones: Videos

    - [Query Selectors](https://scrimba.com/scrim/cVyMrvsp?pl=pG66Msa)

    - [Modifying styles](https://scrimba.com/learn/bootcampprimer/modifying-styles-classname-and-classlist-c7zLarhv)

    - [DOM manipulation](https://www.youtube.com/watch?v=wiozYyXQEVk)

## Exercises

1. Today we are going to move out of the console and into the magic world of the DOM! We are going to use the project found in the resources folder. Open it in your editor and view it in your browser. Use the `script.js` file (also found in the resources folder) for your JavaScript.

2. Open the `script.js` file, we will be using it throughout this lesson. Start by fetching the `h1` element using `querySelector` and add a font color to it. Set font color to `var(--accent-color)` using the style property.

3. Fetch the `<span>` element which can be found inside the `h1` tag using `querySelector`. Change the text content using [`textContent`](https://developer.mozilla.org/en-US/docs/Web/API/Node/textContent) so it says your name instead of `XXX`.

4. Fetch the `.grid-section` element using `querySelector` and add an `.accio` class to it using [`classList.add()`](https://developer.mozilla.org/en-US/docs/Web/API/Element/classList).

5. Fetch all `p` tags inside `.grid-section` using `querySelectorAll`. Loop through each `p` element in the array and add an `.accio` class to it.

6. Fetch the `a` tag in the bottom section using `querySelector` and change the `href` attribute to `https://thewizardingworld.co.uk/`

7. Fetch all star images in `.border` using `querySelectorAll` and add a `.spin` class to them.

8. Fetch the `p` tag in `.hero-section` using `querySelector`. Check if the `p` tag exists using an if statement. If it exists, extract the text content from the `p` tag and pass the text as a parameter to the magic function `alohomora()`. The function returns a parsed string, replace the initial text with the new text returned from the function.

9. Fetch all `span` elements inside the bottom section's `p` tag using `querySelectorAll`. Add a `.lumos` class to all `span` elements.

10. Fetch the last image in the grid using `querySelector`. Change the image src attribute to an image of you (or someone else). Also, change the `p` tag which says `Your name? ` to your actual name.

11. Fetch the element `.witch` using `querySelector`. Remove the `.freeze` class from the element.

12. As you can see we have one last thing to do. Fetch Voldemort and [remove](https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild) him from the document. He does not belong here.

13. Create a new image element using `document.createElement` and append it to the document using `.appendChild`. Give it a `src`, an `alt` text and a `.not-voldemort` class. You can set whatever image `src` you want, as long as it's NOT Voldemort.

14. **Extra:** Fetch all `p` tags in the `.grid-section` using `querySelectorAll`. Wrap each text's first letter in a `<span>` using JavaScript. Add a `.lumos` class to the new span element.

15. **Bonus!** Fetch all `div` elements using `querySelectorAll` and add a `.spin` class to them.
