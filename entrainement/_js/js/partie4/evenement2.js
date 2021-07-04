const inputName = document.querySelector('#name');

inputName.addEventListener('change', (event) => {
  const res = document.querySelector('#res-name');
  res.textContent = `${event.target.value}`;
});

const selectGender = document.querySelector('#gender');

selectGender.addEventListener('change', (event) => {
  const res = document.querySelector('#res-gender');
  res.textContent = `${event.target.value}`;
});

const resultat = document.querySelector('#result');

resultat.addEventListener('mousemove', function(event) {
    const res_x = document.querySelector('#mouse-x');
    res_x.textContent = `${event.offsetX}`;
    const res_y = document.querySelector('#mouse-y');
    res_y.textContent = `${event.offsetY}`;
});


