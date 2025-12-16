<?php
// Header include: logo, nav, theme toggle
?>
<header class="site-header">
  <div class="container inner">
    <div class="brand">
      <img src="img/logo.png" alt="logo">
      <h1>Proyecto Web</h1>
    </div>
    <div class="header-actions">
      <button class="menu-toggle" aria-label="Abrir menú" aria-expanded="false">☰</button>
      <nav class="main-nav collapsed" aria-label="Navegación principal">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="about.php">Sobre nosotros</a></li>
          <li><a href="contact.php">Contacto</a></li>
          <li><a href="register.php">Registro</a></li>
        </ul>
      </nav>
      <button id="theme-toggle" class="theme-toggle" aria-label="Cambiar tema">🌙</button>
    </div>
  </div>
</header>