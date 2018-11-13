<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- JQuery -->
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>

	
	<title>About</title>
</head>
<body>
	
	<?php 

		require('actionManager/config.php');
		require('shared/_nav_bar.php');
	?>

	<br>
	<!-- About us msg -->
	<div class="container">
		<div class="card">
			<div class="card-body">
				<p>
					Decidimos crear una herramienta que ayude a cada persona a definir sus metas y sueños personales; para visualizarlos seguir un plan y lograrlos, creamos la solución perfecta. 
					My Planner ayuda a definir metas a corto y largo plazo y organizar los pasos a seguir para lograrlas, mientras te ayuda a organizarte en tu día a día. 	
				</p>
				<footer class="blockquote-footer">
					Deyanira Arjona <cite title="Source Title">CEO MyPlannerMX</cite>
				</footer>
				<div class="text-center">
					<a href="<?php echo BASE_URL;?>actionManager/planners/get_all_planners.php" class="btn btn-secondary	">Comienza a comprar</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php 
	require('shared/_global_footer.php');
	?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

