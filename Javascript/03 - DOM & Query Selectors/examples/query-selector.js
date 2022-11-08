// Get an element with a selector.
console.log(document.querySelector('article p.description'));

// Get multiple elements with a selector.
console.log(document.querySelectorAll('article p'));

// Use query selector on a specific element. It will only look inside that element when querying
const section = document.querySelector('section');
console.log(section.querySelector('p'));
