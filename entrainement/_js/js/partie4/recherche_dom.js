let listeEl = document.querySelector("article > ul.important > li")

console.log(listeEl.nextElementSibling);

let main_content = document.getElementById('main-content');
console.log(main_content);

let important = document.getElementsByClassName('important');
console.log(important[1]);

let article = document.getElementsByTagName ('article');
console.log(article[0]);

let quatre = document.querySelector('article ul.important>li');
console.log(quatre);

let cinq = quatre.nextElementSibling;
console.log(cinq);