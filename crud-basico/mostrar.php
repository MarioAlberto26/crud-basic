<?php
// incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud = new CrudLibro();
$libro = new Libro();
// obtiene todos los libros con el método mostrar de la clase crud
$listaLibros = $crud->mostrar();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Libros</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 20px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 8px;
			text-align: left;
		}
		th {
			background-color: #f2f2f2;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		a {
			text-decoration: none;
			padding: 4px 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			color: #333;
		}
		a:hover {
			background-color: #f2f2f2;
		}
		.btn-update {
			background-color: #4CAF50;
			color: white;
		}
		.btn-delete {
			background-color: #f44336;
			color: white;
		}
		.btn {
			margin-right: 5px;
		}
		.btn-container {
			display: inline-block;
		}
		.btn-back {
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Autor</th>
				<th>Edicion</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td><?php echo $libro->getNombre() ?></td>
				<td><?php echo $libro->getAutor() ?></td>
				<td><?php echo $libro->getAnio_edicion() ?></td>
				<td class="btn-container">
					<a href="actualizar.php?id=<?php echo $libro->getId() ?>&accion=a" class="btn btn-update">Actualizar</a>
					<a href="administrar_libro.php?id=<?php echo $libro->getId() ?>&accion=e" class="btn btn-delete">Eliminar</a>
				</td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	<a href="index.php" class="btn btn-back">Volver</a>
</body>
</html>
