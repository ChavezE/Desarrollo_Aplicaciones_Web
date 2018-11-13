<!doctype html>
<html lang="en">
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


	<title>Planners!!</title>
</head>
<body>
	<?php 
		require('actionManager/config.php');
 	?>	
	<!-- Nav bar -->
	<?php 
	require('shared/_nav_bar.php');
	?>

<!-- 	<section class="jumbotron text-center">
		<h1 class="jumbotron-heading">Hey, es un buen día, sonríe!</h1>
		<p class="lead text-muted text-center">-Organized lifestyle-</p>	
	</section>
 -->

	
	<!-- Welcome message -->
	<div class="container">
		<h3>Hey, es un buen día, sonríe!</h3>
		<div class="card mx-auto" style="width: 25rem;">
			<img class="card-img-top" src="img/landing2.png" alt="Card image cap">
			<div class="card-body">
				<h3 class="card-text text-center">
					Agendas personalizadas <br>
					<small class="text-muted mx-auto">100% Mexicanas.</small>
				</h3>
				
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php 
	require('shared/_global_footer.php');
	?>

	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- JQuery moved to top -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>