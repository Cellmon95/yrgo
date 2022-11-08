// Get multiple elements with a selector.
const elements = document.querySelectorAll('article');

// Loop through array of elements to access each element
elements.forEach((element) => {
  element.classList.add('active');
});
