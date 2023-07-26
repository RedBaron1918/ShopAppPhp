<?php
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/ShopAppPhp/public/layouts/header.php";
$footer = $_SERVER['DOCUMENT_ROOT'] . "/ShopAppPhp/public/layouts/footer.php";
include_once $absolute_path;
?>
        <h1 class="faq-heading">FAQ'S</h1>
        <div>
        <section class="faq-container">
            <div class="faq-one">
                <h1 class="faq-page">What is an FAQ Page?</h1>
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <h1 class="faq-page">Why do you need an FAQ page?</h1>
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
<h1 class="faq-page">Does it improves the user experience of a website?</h1>
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
        </section>
        </div>
        <script>
  function toggleFAQ() {
    this.classList.toggle("activeFaq");
    let body = this.nextElementSibling;
    if (body.style.maxHeight) {
      body.style.maxHeight = null;
    } else {
      body.style.maxHeight = body.scrollHeight + "px";
    }
  }

  let faq = document.querySelectorAll(".faq-page");
  for (let i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", toggleFAQ);
  }
</script>


<?php
include_once $footer;
?>
