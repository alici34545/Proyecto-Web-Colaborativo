<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include __DIR__ . '/inc/header.php'; ?>

<main class="container">
    <div class="card reveal">
        <h2>RELLENA DATOS DEL REGIS</h2>
        <?php
$serverMsg = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass = $_POST['pass'] ?? '';
    $confirmar = $_POST['confirmar'] ?? '';
    if(!$nombre || !$email || !$pass || !$confirmar){
        $serverMsg = 'Por favor completa todos los campos.';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $serverMsg = 'Correo inválido.';
    } elseif(strlen($pass) < 6){
        $serverMsg = 'La contraseña debe tener al menos 6 caracteres.';
    } elseif($pass !== $confirmar){
        $serverMsg = 'Las contraseñas no coinciden.';
    } else {
        $serverMsg = 'Registro recibido. (Esto es una demo, no se guarda.)';
    }
}
?>

        <form method="post" onsubmit="return validarFormulario()">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required value="<?php echo htmlspecialchars($_POST['nombre'] ?? '', ENT_QUOTES); ?>">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>">

            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" required>

            <label for="confirmar">Confirmar contraseña</label>
            <input type="password" id="confirmar" name="confirmar" required>

            <div id="mensaje-error" class="error" role="alert"><?php echo $serverMsg ? htmlspecialchars($serverMsg, ENT_QUOTES) : ''; ?></div>

            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Registrarse</button>
                <a class="btn btn-ghost" href="index.php">Cancelar</a>
            </div>
        </form>
    </div>
</main>

<?php include __DIR__ . '/inc/footer.php'; ?>

<script src="js/funciones.js"></script>
</body>
</html>