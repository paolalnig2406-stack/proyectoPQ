<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		/* Fuerza el fondo rosa claro directamente en el HTML */
		body.perfil-body {
			background-color: #fce4ec !important;
		}
	</style>
</head>
<body class="perfil-body">
	<nav class="navbar" aria-label="Navegación principal">
		<a class="brand" href="index.php">Proyecto PQ</a>
		<div class="navbar-links">
			<a href="index.php" >inicio</a>
			<a href="Formulario.php">Formulario</a>
			<a href="Nosotros.php">Nosotros</a>
			<a href="Perfil.php" aria-current="page" >Perfil</a>
		</div>
	</nav>

    <main class="profile-page">
        <header class="profile-header">
            <img class="profile-avatar" src="imagenes/paola.jpeg" alt="Foto de perfil de Paola García">
            <div class="profile-heading">
                <p class="profile-eyebrow">Perfil de usuario</p>
                <h1 class="profile-name">Paola García Amaro</h1>
                <p class="profile-tagline">Miembro de Proyecto PQ</p>
            </div>
        </header>

        <div class="profile-sections">
            <section class="profile-section" aria-labelledby="bio-title">
                <h2 id="bio-title">Sobre mí</h2>
                <p>Hola, soy Paola. Este es mi espacio personal dentro de Proyecto PQ. Aquí puedo compartir un poco sobre mí y mis intereses.</p>
            </section>

            <section class="profile-section" aria-labelledby="info-title">
                <h2 id="info-title">Información del perfil</h2>
                <dl class="profile-details">
                    <div>
                        <dt>Nombre</dt>
                        <dd>Paola García nn Amaro</dd>
                    </div>
                    <div>
                        <dt>Rol</dt>
                        <dd>Miembro</dd>
                    </div>
                    <div>
                        <dt>Proyecto</dt>
                        <dd><a href="index.php">Proyecto PQ</a></dd>
                    </div>
                </dl>
            </section>
        </div>
	</main>
</body>
</html>