const element = document.querySelector('.ron');

// You can assign any styles to the 'style' object.
element.style.width = 200 + 'px';
element.style.borderRadius = '100%';
element.style.border = '10px solid red';
element.style.margin = '40px';

// We can also use CSS variables
element.style.color = `var(--font-color)`;

// We can also give the CSS variable a new value
document.documentElement.style.setProperty('--font-color', 'tomato');
