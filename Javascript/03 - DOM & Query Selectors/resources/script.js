const domHeaderOne = document.querySelector('h1');
const domSpanInHeaderOne = document.querySelector('h1 span');
const domGridSection = document.querySelector('.grid-section');
const domGridSectionAllP = document.querySelectorAll('.grid-section p');
const domABottomSection = document.querySelector('.info-section a');
const domBorderAllImages = document.querySelectorAll('.border img');
const domHeroSection = document.querySelector('.hero-section p');
const domBottomSectionSpan = document.querySelectorAll('.info-section p span');
const domLastGridImage = document.querySelector('.grid-section .grid-item:last-child img');
const domLastGridP = document.querySelector('.grid-section .grid-item:last-child p');
const domWitch = document.querySelector('.witch');
const domVoldemort = document.querySelector('.voldemort');
const domBody = document.querySelector('body');
const notVoldemort = document.createElement('img');
notVoldemort.src = './images/1.jpg';
notVoldemort.alt = 'not voldemort';
notVoldemort.classList.add('not-voldemort'); 

console.log(domBottomSectionSpan);

domHeaderOne.style.color = 'var(--accent-color)';
domSpanInHeaderOne.textContent = 'Lucas Källberg';
domGridSection.classList.add('accio');
domGridSectionAllP.forEach((pTag) =>{
    pTag.classList.add('accio');
});
domABottomSection.href = 'https://thewizardingworld.co.uk/';
domBorderAllImages.forEach((img) => {
    img.classList.add('spin');
});

if(domHeroSection !== null){
    const heroSectiontext = domHeroSection.textContent;
    const alohomaText = alohomora(heroSectiontext);
    domHeroSection.textContent = alohomaText;

};

domBottomSectionSpan.forEach((span) =>{
    span.classList.add('lumos');
});
console.log(domLastGridImage);
domLastGridImage.src = './images/voldemort.png';
domLastGridP.textContent = 'Voldemort';
domWitch.classList.remove('freeze');
domBody.removeChild(domVoldemort);
domBody.appendChild(notVoldemort);
