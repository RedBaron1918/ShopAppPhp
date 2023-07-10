<?php
class Cards
{
  private $name;
  private $price;
  private $quantity;
  private $img;

  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
  function get_price()
  {
    return $this->price;
  }
  function set_price($price)
  {
    $this->price = $price;
  }

  function set_quantity($quantity)
  {
    $this->quantity = $quantity;
  }
  function get_quantity()
  {
    return $this->quantity;
  }
  function set_img($img)
  {
    $this->img = $img;
  }
  function get_img()
  {
    return $this->img;
  }
}






$book = new Cards();
$book->set_name("წიგნი");
$book->set_price("30");
$book->set_quantity("50");
$book->set_img("https://image.shutterstock.com/image-photo/book-260nw-732217162.jpg");


?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>

          </div>

        </div>

      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>

          </div>

        </div>

      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>

          </div>

        </div>

      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>

          </div>

        </div>

      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>

          </div>

        </div>

      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 ">
        <div class="card align-items-center text-center border-0 shadow-lg p-4   ">
          <img src="<?= $book->get_img() ?>" class="card-img-top rounded-circle card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= "სახელი: " . $book->get_name(); ?></h5>
            <p class="lead fs-6">
              ჟანრი:
            </p>
            <p class="card-text"><?= "ფასი: " .  $book->get_price() ?></p>
            <p class="card-text"><?= "რაოდენობა " . $book->get_quantity() ?></p>
            <a href="#" class="btn btn-primary">ყიდვა</a>

          </div>

        </div>

      </div>

    </div>
  </div>

  </div>
</body>

</html>