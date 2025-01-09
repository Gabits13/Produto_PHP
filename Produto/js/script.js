function validateForm() {
    var nome = document.forms["cliente"]["txtnome"].value;
    var estoque = document.forms["cliente"]["txtestoque"].value;
    if (nome == "" || estoque == "") {
        alert("Todos os campos devem ser preenchidos.");
        return false;
    }
    if (isNaN(estoque) || estoque < 0) {
        alert("Por favor, insira um valor válido para o estoque.");
        return false;
    }
    return true;
}
// Função para verificar se os elementos estão visíveis na viewport
function checkVisibility() {
    const sections = document.querySelectorAll('.fade-in-section');
    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        section.classList.add('visible');
      }
    });
  }

  function checkVisibility2() {
    const sections = document.querySelectorAll('.fade-in-sectionx');
    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        section.classList.add('visible');
      }
    });
  }
  function checkVisibility3() {
    const sections = document.querySelectorAll('.fade-in-sectionx2');
    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        section.classList.add('visible');
      }
    });
  }
  
  
  // Verificar visibilidade ao carregar a página
  window.addEventListener('load', checkVisibility);
  window.addEventListener('load', checkVisibility2);
  window.addEventListener('load', checkVisibility3);
  // Verificar visibilidade ao rolar a página
  window.addEventListener('scroll', checkVisibility);
  window.addEventListener('scroll', checkVisibility2);
  window.addEventListener('scroll', checkVisibility3);
  