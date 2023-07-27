<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Libro</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #2c3e50;
			color: white;
			text-align: center;
			padding: 20px;
			font-size: 28px;
		}

		form {
			max-width: 400px;
			margin: 20px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
		}

		form label {
			display: block;
			font-weight: bold;
			color: #555;
			margin-bottom: 5px;
		}

		form input[type="text"] {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 14px;
		}

		form input[type="submit"],
		form a {
			display: block;
			margin-top: 10px;
			padding: 10px;
			text-align: center;
			background-color: #3498db;
			color: white;
			text-decoration: none;
			border: none;
			border-radius: 4px;
			font-size: 16px;
		}

		form a {
			background-color: #e74c3c;
		}

		form input[type="submit"]:hover,
		form a:hover {
			background-color: #1abc9c;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<header>
		Ingresa los datos del Libro
	</header>
	<form action='administrar_libro.php' method='post'>
		<label for="nombre">Nombre del libro:</label>
		<input type='text' name='nombre' id="nombre">

		<label for="autor">Autor:</label>
		<input type='text' name='autor' id="autor">

		<label for="edicion">Fecha de Edición:</label>
		<input type='text' name='edicion' id="edicion">

		<input type='hidden' name='insertar' value='insertar'>
		<input type='submit' value='Guardar'>
		<a href="index.php">Volver</a>
	</form>
</body>
</html>