/**
 * Archivo: funciones.js
 * Módulo: Validaciones básicas para el formulario de registro.
 * Desarrollador: alici lopez dionicio(Código implementado por Alici L.D. en la estructura)
 */

function validarRegistro() {
    const password = document.getElementById('password').value;
    const confirmar = document.getElementById('confirmar').value;
    const errorMsg = document.getElementById('mensaje-error');

    errorMsg.textContent = ''; // Limpiar mensajes de error anteriores

    // Validación 1: Las contraseñas deben coincidir
    if (password !== confirmar) {
        errorMsg.textContent = 'Error: Las contraseñas no coinciden.';
        return false; // Detiene el envío del formulario
    }

    // Validación 2: Contraseña mínima (ejemplo: 6 caracteres)
    if (password.length < 6) {
        errorMsg.textContent = 'Error: La contraseña debe tener al menos 6 caracteres.';
        return false;
    }

    // Si todas las validaciones pasan
    alert('Validación exitosa. Simulando envío del formulario.');
    return true; 
}