document.addEventListener('DOMContentLoaded', function() {
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
  });
  
  // Form submission handling
  document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    // Aquí puedes agregar código para manejar el envío del formulario, como enviar un correo electrónico o almacenar los datos.
    // Con fines de demostración, vamos a registrar los datos del formulario en la consola.
    const formData = new FormData(this);
    console.log('Datos del formulario:', Object.fromEntries(formData));
    // Limpiar los campos del formulario
    this.reset();
  });
});
