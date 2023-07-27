<!DOCTYPE html>
<html>
<head>
	
	<title>Administrar Libro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<style>

		.navbar {
			background-color: gray; /* Change background color to gray */
		}

		.navbar .navbar-brand {
			color: black; /* Change font color to black */
		}

		.btn-primary {
			background-color: #9A9A9A; /* Change background color to gray */
			color: black; /* Change font color to black */
		}

		.footer {
			background-color: #9A9A9A;
			color: black;
		}

		/* Estilos para los botones de redes sociales */
		.social-buttons .btn {
			margin-right: 5px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="#">Administrar Libro</a>
		</div>
	</nav>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Ingresar</h5>
						<p class="card-text">Haz clic en el enlace de abajo para ingresar nuevos libros.</p>
						<a href="ingresar.php" class="btn btn-primary">Ingresar</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Ver</h5>
						<p class="card-text">Haz clic en el enlace de abajo para ver los libros existentes.</p>
						<a href="mostrar.php" class="btn btn-primary">Ver</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mejores Libros as a button -->
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Mejores Libros</h5>
						<p class="card-text">En esta sección encontrarás una selección de los mejores libros que no te puedes perder.</p>
						<a href="mejores.php" class="btn btn-primary">Ver</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Redes sociales -->
	<div class="container mt-4 social-buttons">
		<div class="row">
			<div class="col-md-12">
				<a href="https://www.facebook.com/LibrosParaVivirMejor" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Facebook</a>
				<a href="https://twitter.com/LeePorGusto" class="btn btn-primary"><i class="fab fa-twitter"></i> Twitter</a>
				<a href="https://www.instagram.com/penguinlibrosmx/" class="btn btn-primary"><i class="fab fa-instagram"></i> Instagram</a>
				<a href="https://www.linkedin.com/in/YOUR_LINKEDIN_PROFILE" class="btn btn-primary"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
			</div>
		</div>
	</div>

	<footer class="footer text-center py-2 mt-5">
		Administrar Libro <?php echo date('Y'); ?>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>