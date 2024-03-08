<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrina - Iniciar Sesión</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div class="container-principal">
    <div class="login-container">
        <h1>Nutrina</h1>
        <form id="login-form" method="POST" action="login.php">
            <div class="input-field">
                <label for="username">Usuario:</label>
                <input type="text" id="Usuario" name="Usuario" required>
            </div>
            <div class="input-field">
                <label for="password">Contraseña:</label>
                <input type="password" id="Contraseña" name="Contraseña" required>
            </div>
            <button id="login-button" type="submit">Iniciar Sesión</button>
        </form>
        <p id="error-message" class="error-message"><?php if(isset($error_message)) { echo $error_message; } ?></p>
        <div class="register-link">
            ¿Aún no tienes cuenta? <a href="registrarUsuarios.html">Regístrate aquí</a>
        </div>
    </div>
    <div class="welcome-text">
        <p>¡Bienvenido a nuestra plataforma de bienestar integral!</p>
        <p>En un mundo donde el cuidado personal es primordial, estamos aquí para ofrecerte una experiencia única y personalizada que se adapte a tus necesidades específicas. Nuestro enfoque se centra en tu salud física, mental y emocional, brindándote las herramientas necesarias para alcanzar tus objetivos de bienestar.</p>
        <p>Ya sea que estés buscando perder peso, ganar masa muscular o simplemente mantenerte en forma, nuestro equipo de expertos está listo para ayudarte. Nuestra plataforma te ofrece la posibilidad de recibir un estilo de vida personalizado o tratos en el ejercicio adaptados a tu cuerpo y dieta personales. Todo esto basado en la información que nos proporciones para asegurarnos de que cada recomendación sea precisa y efectiva.</p>
        <p>Además, en nuestra tienda encontrarás una amplia gama de productos cuidadosamente seleccionados para complementar tu régimen de salud y fitness.</p>
    </div>
  </div>

  <script src="script/script.js"></script>

</body>
</html>
