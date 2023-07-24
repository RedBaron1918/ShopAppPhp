

<?php
$productImg = Product::limit(3)->get("img_url");
?>
  <div class="col-12">
  <div class="carousel">
  
  <?php
  foreach ($productImg as $product) {
  ?>
    <div class="slide active carusel_img ">
      <img src="<?= $product->img_url ?>" alt="<?= $product->product_name ?>">
    </div>


  <?php
  }
  ?>
  </div>
</div>
