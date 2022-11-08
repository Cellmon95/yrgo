// We can remove an element from the DOM by using removeElement()
// This will remove the first h1 found in the <body> element
const box = document.querySelector('.box');
document.body.removeChild(box);

// We can also be more specific and remove an element inside a selected DOM element
const img = box.querySelector('img');
box.removeChild(img);
