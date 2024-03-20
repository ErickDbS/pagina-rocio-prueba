// Redirigir al usuario después de enviar el formulario
document.getElementById('login-form').addEventListener('submit', function(event) {
    // Evitar que el formulario se envíe normalmente
    event.preventDefault();

    // Redirigir al usuario a la página deseada
    window.location.href = '../inicio.html';
});