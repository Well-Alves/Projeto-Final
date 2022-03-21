(function() {
  'use strict';
  window.addEventListener('load', function() {
   
    var forms = document.getElementsByClassName('needs-validation');
    
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


  const boasvindas = () => { 
  let h = new Date().getHours();
  switch (true) {
    case h <= 5: return 'Olá, Boa madrugada!';
    case h < 12: return 'Olá, Bom dia!';
    case h < 18: return 'Olá, Boa tarde!';
    default: return 'Olá, Boa noite!';
  }      
}

document.getElementById("bvindas").textContent = boasvindas();


const anos = () => {
  let ano_atual = new Date().getFullYear();
  let ano_informado = 1990;
  return ano_atual - ano_informado;
}


document.getElementById("idade").textContent = anos();