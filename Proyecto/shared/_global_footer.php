		<!-- Footer  -->
		<footer class="container pt-4 my-md-5 pt-md-5 border-top">
			<div class="row">
				<div class="col-12 col-md">
					<img src="<?php echo BASE_URL;?>img/brand_logo.png" id="logo_footer">
					<small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
				</div>
				<div class="col-4 col-md">
					<h4>Conócenos</h4>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="<?php echo BASE_URL;?>about.php">Nosotros</a></li>
						<li><a class="text-muted" href="<?php echo BASE_URL;?>actionManager/planners/get_all_planners.php">Producto</a></li>
						<!-- <li><a class="text-muted" href="#">Tips</a></li> -->
						<!-- <li><a class="text-muted" href="#">Contacto</a></li> -->
					</ul>
				</div>
<!-- 				<div class="col-4 col-md">
					<h5>Ayuda</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Preguntas frecuentes</a></li>
						<li><a class="text-muted" href="#">Envío</a></li>
						<li><a class="text-muted" href="#">Politicas de compra</a></li>
						<li><a class="text-muted" href="#">Métdos de pago</a></li>
					</ul>
				</div> -->
				<div class="col-4 col-md">
					<h5>Siguenos</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="http://www.facebook.com/myplannermx">Facebook</a></li>
						<li><a class="text-muted" href="http://instagram.com/myplannermx">Instragram</a></li>
					</ul>
				</div>
				<?php
					if(isset($_SESSION['UserID'])){
						echo "<div class=\"col-4 col-md\">";
							echo "<div class=\"col-4 col-md\">";
								echo "<h5>Administrar</h5>";
								echo "<ul class=\"list-unstyled text-small\">";
									echo "<li><a class=\"text-muted\" href=\"". BASE_URL. "actionManager/orders/get_user_orders.php" ."\">Mis Ordenes</a></li>";
								echo "</ul>";
							echo "</div>";
						echo "</div>";
					}
				?>

			</div>
		</footer>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
