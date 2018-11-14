
<div class="col-md-4">
	<div class="card mb-4 shadow-sm">
		<img class="card-img-top" src="<?php echo BASE_URL.$planner->imagePath; ?>" alt="Card image cap">
		<div class="card-body">
			<p class="card-text"><?php echo $planner->description; ?></p>
			<div class="d-flex justify-content-between align-items-center">
				<button type="button" class="btn btn-sm btn-outline-secondary" id="<?php echo $planner->planerID?>">Comprar</button>
				<div class="btn-group"></div>
				<!-- PRECIO -->
				<small class="text-muted"><?php echo "$".$planner->price; ?></small>
			</div>
		</div>
	</div>
</div>


