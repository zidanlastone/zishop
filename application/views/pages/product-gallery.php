	<section class="jumbotron text-center">
		<div class="container">
		<h1 class="jumbotron-heading text-primary">ZiShop</h1>
		<p class="lead text-muted">Menjual Barang barang berkualitas dengan harga bersahabat</p>
		</div>
	</section>

	<div class="album py-5 bg-light">
		<div class="container">

		<div class="row">
		<?php foreach($products as $product): ?>
			<div class="col-md-4">
			<div class="card mb-4 shadow-sm">
				<img class="card-img-top" style="height:300px;" src="<?php echo base_url('assets/images/upload/product/'.$product->image) ?>" alt="<?php echo $product->name?>">
				<div class="card-body">
				<h4 class="card-title"><?php echo $product->name?></h4>
				<h5>Rp.<?php echo number_format($product->price, 2, ',','.')?></h5>
				<p class="card-text"><?php echo $product->description?></p>
				</div>
			</div>
			</div>
		<?php endforeach;?>
		</div>
		</div>
	</div>
