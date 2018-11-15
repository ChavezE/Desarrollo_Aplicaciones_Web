<?php
	require('shared/_header.php');
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
					foreach ($planner_array as &$planner){
						require('shared/_planner_template.php');
					}
				?>
		</div>
	</div>

</main>
<script type="text/javascript" src="<?php echo BASE_URL;?>js/catalog.js"></script>

<?php
	require('shared/_global_footer.php');
?>
