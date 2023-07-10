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



<nav class="navbar navbar-expand-lg bg-body-tertiary">



  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse  navbar-collapse ul-search  center-ul" id="navbarSupportedContent">
    <div class="ul-p w-100 my-3 container">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-hdr">
        <?php include "./components/logo.php"; ?>
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
      <div class="btns">
        <button type="button" class="btn btn-outline-primary btnSignin" data-bs-toggle="modal" data-bs-target="#exampleModalS">
              Sign-in
            </button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalR">
              Register
            </button>

      </div>
    </ul>
    </div>

    


    <div class="search-register mb-3 ">
      <div class="search">
      <div class="signin-register">
        
        
        <div class="modal fade " id="exampleModalS" tabindex="-1" aria-labelledby="exampleModalLabelS" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content ">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign-in</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="">
                  <div class="mb-3 ">
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                  </div>
                  <div class="mb-5">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">
                  Sign-in
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModalR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" enctype="multipart/form-data">
                  <div class="mb-3">
                    <input type="text" name="firstName" class="form-control" placeholder="First Name" />
                  </div>
                  <div class="mb-3">
                    <input type="text" name="lastName" class="form-control" placeholder="Last Name" />
                  </div>
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                  </div>
                  <div class="mb-3">
                    <input type="password" name="passwordRepeat" class="form-control" placeholder="Repeat Password" />
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">
                  Create account
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
        <form class="d-flex" role="search">
          <input class="form-control me-3 mb-3 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary btnSearch btn-outline-warning" type="submit">Search</button>
        </form>

      </div>


      
    </div>
  </div>
</nav>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js
"></script>