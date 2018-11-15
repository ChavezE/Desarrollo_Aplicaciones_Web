<?php
	require('shared/_header.php');
?>
<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Ordenes del usuario <?php echo $_SESSION['Username'] ?></h1>
			<p class="lead text-muted">Todas las ordenes realizadas</p>
		</div>
	</section>

	<div class="album py-5 bg-light">
		<div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">PlannerID</th>
            <th scope="col">Cost</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i = 0;
            foreach ($orders as $order) {
              require 'shared/_order_row.php';
              $i += 1;
            }
           ?>
        </tbody>
      </table>
		</div>
	</div>

</main>
<script type="text/javascript" src="<?php echo BASE_URL;?>js/catalog.js"></script>

<?php
	require('shared/_global_footer.php');
?>
