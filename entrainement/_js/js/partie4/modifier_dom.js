const newElement = document.createElement('p');
newElement.innerHTML = 'Mon <strong>grand</strong> contenu';
let main = document.getElementById('main');
newElement.classList.add('important');
newElement.style.color = 'green';

main.appendChild(newElement);

console.log(main);
