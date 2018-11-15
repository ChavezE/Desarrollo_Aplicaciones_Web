<?php
	require('shared/_header.php');
?>
<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Nueva Orden</h1>
		</div>
	</section>

	<div class="album py-5 bg-light">
		<div class="container">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <h3 class="mb-0">
              <a class="text-dark" href="#">Planner</a>
            </h3>
            <strong class="d-inline-block mb-2 text-primary">Color: <?php echo $newOrder->Planner->color; ?></strong>
            <div class="mb-1 text-muted"># paginas: <?php echo $newOrder->Planner->numOfPages; ?></div>
            <p class="card-text mb-auto"><?php echo $newOrder->Planner->description; ?></p>
            <div class="mb-1 text-muted">Costo unitario: $
              <span id="unitCost_planner">
                <?php echo $newOrder->Planner->price; ?>
              </span>
            </div>
            <label for="inputPassword" class="">Quantity</label>
            <input type="text" id="plannerQuantity" name="plannerQuantity" class="form-control" placeholder="Quantity">
            <h3>Total Amount: $<span id="totalAmount"><?php echo $newOrder->Planner->price; ?></span></h3>
            <input id="plannerID" name="prodId" type="hidden" value="<?php  echo $newOrder->Planner->planerID;?>">
            <button type="button" class="btn btn-sm btn-outline-secondary buy-planner" id="confirm_order">Comprar</button>
          </div>
          <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
              src="<?php  echo BASE_URL.$newOrder->Planner->imagePath;?>" data-holder-rendered="true">
      </div>
		</div>
	</div>

</main>

<script type="text/javascript" src="<?php echo BASE_URL;?>js/order.js"></script>
<?php
	require('shared/_global_footer.php');
?>
