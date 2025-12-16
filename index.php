<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Inicio - Proyecto Web</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include __DIR__ . '/inc/header.php'; ?>

<main class="container">
    <div class="card card-glow reveal">
        <h2>Bienvenidos al Proyecto Web Colaborativo</h2>
        <p class="muted">Este es un proyecto desarrollado de forma colaborativa por estudiantes.</p>
        <p style="margin-top:16px">
            <a class="btn btn-primary" href="register.php">Registrarse</a>
            <a class="btn btn-ghost" href="about.php" style="margin-left:8px">Acerca</a>
            <a class="btn btn-ghost" href="contact.php" style="margin-left:8px">Contacto</a>
        </p>

        <div class="panel-grid reveal" style="margin-top:22px">
            <div class="panel">
                <span class="accent-badge">Equipo</span>
                <h3>Trabajo</h3>
                <p>Trabajo en equipo, control de versiones y buenas prácticas.</p>
            </div>
            <div class="panel">
                <span class="accent-badge">Aprende</span>
                <h3>Informatica</h3>
                <p>HTML, CSS, JavaScript y PHP en un proyecto práctico.</p>
            </div>
            <div class="panel">
                <span class="accent-badge">Comparte</span>
                <h3>Recursos</h3>
                <p>Plantillas, validaciones y ejemplos para estudiar y mejorar.</p>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/inc/footer.php'; ?>
<script src="js/funciones.js"></script>