<h2>PRODUK</h2>
	
<!-- Cart basket -->

<!-- List all products -->
<div class="row col-lg-12">
    <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="card col-lg-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Harga: <?php echo $row["price"]; ?></h6>
                <p class="card-text"><?php echo $row["description"]; ?></p>
                <a href="<?php echo base_url('products/addToCart/'.$row['id']); ?>" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    <?php } }else{ ?>
        <p>Product(s) not found...</p>
    <?php } ?>
</div>