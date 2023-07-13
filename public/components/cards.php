<?php
$books = Product::all();

?>

<div class="container-fluid">
  <div class="row">
    <?php
    foreach ($books as $book) {

    ?>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4  img-parent ">
          <img src="<?= $book->img_url ?>" class="card-img-top rounded-circle card-image " alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->name; ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->price ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>