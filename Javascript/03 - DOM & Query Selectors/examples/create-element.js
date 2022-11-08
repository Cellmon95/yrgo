// Create an element by using document.createElement
const img = document.createElement('img');

// Add the needed attributes to the element
img.src = 'image.jpeg';
img.alt = 'My alt text';
img.classList.add('bordered-image');

// The element won't be visible until we append it to the DOM
document.body.appendChild(img);

// we can also append it to another element, instead of the <body>
const box = document.querySelector('.box');
box.appendChild(img);
