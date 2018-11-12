<!-- custom CSS -->
<link rel="stylesheet" type="text/css" href="css/front_page.css">
<!-- Navigation -->
<div class="container">
	<nav class="navbar navbar-light navbar-expand-md bg-light justify-content-between">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link pl-0" href="index.php">Inicio <span class="sr-only">Inicio</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="catalogo.php">Catalogo de agendas</a>
					</li>
				</ul>
			</div>
			<a href="index.php" class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25">
				<!-- Brand -->
				<img src="img/brand_logo.png" width="100%" height="100%" alt="">
			</a>

			<div class="navbar-collapse collapse dual-nav w-50 order-2">
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href=""><i class="fa fa-twitter"></i></a></li>
					<li class="nav-item"><a class="nav-link" href=""><i class="fa fa-github"></i></a></li>
				</ul>
				<button class="btn btn-outline-danger  my-2 my-sm-0 btn-space" id="init_sesion_btn">Iniciar sesión</button>
				<button class="btn btn-outline-success my-2 my-sm-0" id="register_btn">Registro</button>
			</div>
		</div>
	</nav>
</div>
<!-- custom JS -->
<script type="text/javascript" src="js/home.js"></script>