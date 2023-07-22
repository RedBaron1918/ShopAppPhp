$(document).ready(function () {
  $("#login").on("submit", function (event) {
    event.preventDefault();
    $(".overlay").show();
    $.ajax({
      url: "../components/login.php",
      method: "POST",
      data: $("#login").serialize(),
      success: function (data) {
        if (data == "login_success") {
          window.location.href = "index.php";
        } else if (data == "cart_login") {
          window.location.href = "cart.php";
        } else {
          $("#e_msg").html(data);
          $(".overlay").hide();
        }
      },
    });
  });

  $("#signup_form").on("submit", function (event) {
    event.preventDefault();
    $(".overlay").show();
    $.ajax({
      url: "../components/register.php",
      method: "POST",
      data: $("#signup_form").serialize(),
      success: function (data) {
        $(".overlay").hide();
        if (data == "register_success") {
          window.location.href = "cart.php";
          $(".overlay").hide();
        } else {
          $("#signup_msg").html(data);
        }
      },
    });
  });
});
