<?php
$link_names_urls = [
  [
    "link_name" => "Home",
    "link_url" => "./pages/home.php"
  ],
  [
    "link_name" => "FAQ",
    "link_url" => "./pages/faq.php"
  ],
  [
    "link_name" => "Favorites",
    "link_url" => "./pages/favorites.php"
  ],
  [
    "link_name" => "Cart",
    "link_url" => "./pages/cart.php"
  ],

];

$logo = "./assets/images/logo.png";

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container">



    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ul-search" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-hdr">
        <a href="">
          <div class="logo">
            <img src="<?= $logo; ?>" alt="Online Shopping">
          </div>
        </a>
        <?php
        foreach ($link_names_urls as $link_name_url) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= $link_name_url["link_url"]; ?>">
              <?= $link_name_url["link_name"]; ?>
            </a>
          </li>
        <?php }
        ?>
      </ul>
      <div class="search-register">
        <form class="d-flex" role="search">
          <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
  
        <div class="signin-register">
          <button type="button" class="btn btn-outline-dark mx-3 sign-in" id="signin">Sign-in</button>
          <button type="button" class="btn btn-outline-dark ">Register</button>
        </div>

      </div>


    </div>
  </div>
</nav>