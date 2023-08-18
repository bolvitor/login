const botonCerrarSesion = document.getElementById('CerrarSesion');

const cerrarSesion = () => {
    // Realiza aquí la lógica para cerrar la sesión (eliminar cookies, variables de sesión, etc.)
    window.location.href = '/login/'; // Redirigir a la página de inicio de sesión
};

if (botonCerrarSesion) {
    botonCerrarSesion.addEventListener('click', cerrarSesion);
}

// Evitar que el usuario regrese a la página de inicio de sesion
window.history.pushState(null, null, window.location.href);
window.onpopstate = function(event) {
    window.history.go(1);
};