<?php
  $pageTitle = 'Login';
  require __DIR__ . '/../_modules/components/header.php';
?>


<div class="container-auth min-h-100">
  <div class="title mb-3">
    <h1 class="text-primary">Facebook</h1>
    <h5 class="d-none lg:d-block">Facebook helps you connect and share with the people in your life.</h5>
  </div>

  <div class="card-form">
    <form id="login-form" class="mb-2">
      <input type="email" name="Email" id="email" placeholder="Email address" class="mb-2">
      <input type="password" name="Password" id="password" placeholder="Password" class="mb-2">

      <button id="btn-login" class="btn btn-primary mb-2">Log In</button>

      <a href="<?= $config->url('auth/forgot-password.php') ?>" class="btn btn-primary mb-3">Forgotten Password?</a>

      <hr class="mb-3">

      <a href="<?= $config->url('auth/register.php') ?>" class="btn btn-green">Create New Account</a>
    </form>

    <div class="text-center">
      <div id="error" class="text-red"></div>
      <div id="success" class="text-green"></div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $("#login-form").on("submit", function(e) {
      e.preventDefault();

      const email = $("#email").val();
      const password = $("#password").val();

      if (email === "" || password === "") {
        // Display error message if fields are empty
        $("#error").html("All fields are required").slideDown();
        $("#success").slideUp();

        setTimeout(function() {
          $("#error").slideUp();
        }, 1000); // Hide the error message after 1 second

      } else {
        $.ajax({
          url: "<?= $config->url('_ajax/login-data.php') ?>",
          type: "POST",
          data: { Email: email, Password: password},
          success: function(data) {
            if (data === "1") {
              // Redirect to index.php on successful login
              window.location.href = "<?= $config->url('index.php') ?>";
            } else {
              // Display error message if login fails
              $("#error").html("Check Your email and password").slideDown();
              $("#success").slideUp();
            }
            setTimeout(function() {
              $("#error, #success").slideUp();
            }, 1000); // Hide the messages after 1 second
          },
          error: function() {
            // Display error message if an error occurs during the AJAX request
            $("#error").html("An error occurred while processing your request.").slideDown().delay(1000).slideUp();
            $("#success").slideUp();
          }
        });
      }
    });
  });
</script>


<?php
  require __DIR__ . '/../_modules/components/footer.php';
?>