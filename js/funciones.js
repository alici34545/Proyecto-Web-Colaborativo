/**
 * Archivo: funciones.js
 * Módulo: Validaciones básicas para el formulario de registro.
 * Desarrollador: alici lopez dionicio(Código implementado por Alici L.D. en la estructura)
 */

function validarRegistro() {
    // Esta función ha quedado obsoleta; usar validarFormulario() en su lugar.
    return validarFormulario();
}

/**
 * Valida el formulario de registro.
 * Debe haber campos con ids: nombre, email, pass, confirmar y un contenedor con id mensaje-error
 */
function validarFormulario(){
    const nombre = document.getElementById('nombre')?.value?.trim();
    const email = document.getElementById('email')?.value?.trim();
    const pass = document.getElementById('pass')?.value || '';
    const confirmar = document.getElementById('confirmar')?.value || '';
    const errorMsg = document.getElementById('mensaje-error');
    if(errorMsg) errorMsg.textContent = '';

    if(!nombre || !email || !pass || !confirmar){
        if(errorMsg) errorMsg.textContent = 'Por favor, completa todos los campos.';
        return false;
    }

    const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRe.test(email)){
        if(errorMsg) errorMsg.textContent = 'Introduce un correo electrónico válido.';
        return false;
    }

    if(pass.length < 6){
        if(errorMsg) errorMsg.textContent = 'La contraseña debe tener al menos 6 caracteres.';
        return false;
    }

    if(pass !== confirmar){
        if(errorMsg) errorMsg.textContent = 'Las contraseñas no coinciden.';
        return false;
    }

    // Validación pasada; aquí normalmente se enviaría el formulario.
    alert('Registro válido. Se puede enviar el formulario.');
    return true;
}

/* ===== Interacciones: menú movil y reveal on scroll ===== */
document.addEventListener('DOMContentLoaded', function(){
    // Menu toggle
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('nav.main-nav');
    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('open');
            nav.classList.toggle('collapsed');
            toggle.setAttribute('aria-expanded', nav.classList.contains('open'));
        });
    }

    // Theme toggle: persist with localStorage
    const themeToggle = document.getElementById('theme-toggle');
    const root = document.documentElement;
    function applyTheme(theme){
        if(theme === 'dark'){
            root.setAttribute('data-theme','dark');
            themeToggle.textContent = '☀️';
            themeToggle.setAttribute('aria-label','Cambiar a tema claro');
        } else {
            root.removeAttribute('data-theme');
            themeToggle.textContent = '🌙';
            themeToggle.setAttribute('aria-label','Cambiar a tema oscuro');
        }
        try{ localStorage.setItem('site-theme', theme); }catch(e){}
    }
    const saved = (function(){ try{ return localStorage.getItem('site-theme'); }catch(e){return null}})();
    if(saved === 'dark') applyTheme('dark');
    if(themeToggle){
        themeToggle.addEventListener('click', ()=>{
            const isDark = root.getAttribute('data-theme') === 'dark';
            applyTheme(isDark ? 'light' : 'dark');
        });
    }

    // Reveal on scroll using IntersectionObserver
    const reveals = document.querySelectorAll('.reveal');
    if('IntersectionObserver' in window && reveals.length){
        const obs = new IntersectionObserver((entries, o)=>{
            entries.forEach(e=>{
                if(e.isIntersecting){
                    e.target.classList.add('is-visible');
                    o.unobserve(e.target);
                }
            })
        },{threshold:0.12});
        reveals.forEach(el=>obs.observe(el));
    } else {
        // fallback: reveal all
        reveals.forEach(el=>el.classList.add('is-visible'));
    }
});