<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Nuestro catalogo</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- JQuery -->
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>

	<!-- Custom styles for this template -->
	<link href="<?php echo BASE_URL;?>css/album.css" rel="stylesheet">
</head>

<body>

	<?php 
	require('shared/_nav_bar.php');
	?>

	<main role="main">

		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">Nuestro Catalogo</h1>
				<p class="lead text-muted">Quiero pedir un planner ¿Por dónde empiezo?</p>
			</div>
		</section>

		<div class="album py-5 bg-light">
			<div class="container">

				<div class="row">
					<?php 
						// var_dump($planner_array);
						foreach ($planner_array as &$planner){
							echo $planner->planerID;
							echo "<br>";
						}

						// for ($i=0; $i < ; $i++) { 
						// 	# code...
						// 	require 
						// }
					?>

					<div class="col-md-4">
						
					</div>
				</div>

				<div class="row">
				</div>

			</div>
		</div>

	</main>

	<?php 
	require('shared/_global_footer.php');
	?>


    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    </body>
    </html>
