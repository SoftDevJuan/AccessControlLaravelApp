import './bootstrap';
// Este es un ejemplo de código JavaScript básico
// Puedes añadir aquí código JavaScript para manejar la funcionalidad de tu aplicación, incluyendo interacciones con la barra lateral desplegable si es necesario

// Por ejemplo, si tienes un botón para desplegar la barra lateral, puedes agregar un controlador de evento para ello:
//document.querySelector('#toggle-sidebar-button').addEventListener('click', function() {
 //   document.querySelector('.sidebar').classList.toggle('active');
//});


document.addEventListener("DOMContentLoaded", function() {
    const toggleSidebarButton = document.getElementById('toggle-sidebar-buttonwe');
    const sidebar = document.querySelector('.sidebar');

    toggleSidebarButton.addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });
});