const input_code = document.querySelector('#code');
const button = document.querySelector('#submit-btn');

function isValidCode(value) {
    if(/^CODE-/.test(value)){      
      button.removeAttribute("disabled");
      document.querySelector('#code-validation').innerHTML = "Code Valide";
      
    }
  else{
    button.setAttribute("disabled", "true");
    document.querySelector('#code-validation').innerHTML = "Code invalide";
  }
};

input_code.addEventListener('input', function(event) {
    let value = event.target.value;
    const validité = isValidCode(value);
    });

