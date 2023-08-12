<?php
  $pageTitle = 'Register';
  require __DIR__ . '/../_modules/components/header.php';
?>


<div class="container-auth min-h-100">
  <div class="card-form">
    <div class="text-center mb-3">
      <h1 class="text-primary" style="font-size: 2em;">Facebook</h1>
    </div>
    <form id="register-form" class="mb-2">
      <input type="text" name="firstname" id="firstname" placeholder="Enter your firstname" class="mb-2">
      <input type="text" name="lastname" id="lastname" placeholder="Enter your last name" class="mb-2">
      <input type="text" name="username" id="username" placeholder="Enter unique username" class="mb-2">
      <input type="email" name="email" id="email" placeholder="Email address or phone number" class="mb-2">
      <input type="password" name="password" id="password" placeholder="Password" class="mb-2">
      <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" class="mb-3">

      <button type="submit" class="btn btn-primary mb-2">Create Now</button>

      <hr>

      <a href="<?= $config->url('auth/login.php') ?>" class="btn btn-green">Already have Account</a>
    </form>

    <div class="text-center">
      <div id="error" class="text-red"></div>
      <div id="success" class="text-green"></div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $("#register-form").on("submit", function(e) {
      e.preventDefault(); // Prevent the default form submission

      const email = $("#email").val();
      const password = $("#password").val();
      const firstname = $("#firstname").val();
      const lastname = $("#lastname").val();
      const confirmpassword = $("#confirmpassword").val();
      const username=$("#username").val();

      // Form validation checks
      if (email === "" || password === "" || firstname === "" || lastname === "" || username === "") {
        $("#error").html("All fields are required").slideDown().delay(1000).slideUp();
        $("#success").slideUp();

      } else if (password !== confirmpassword) {
        $("#error").html("Your Password does not match").slideDown().delay(1000).slideUp();
        $("#success").slideUp();

      } else {
        // Add more password validation here if required

        $.ajax({
          url: "<?= $config->url('_ajax/register-data.php') ?>",
          type: "POST",
          data: {Email: email, Password: password, First_name: firstname, Last_name: lastname,Username: username},
          success: function(data) {
            if (data === "1") {
              $("#success").html("Your Account has been created").slideDown().delay(1000).slideUp();
              $("#error").slideUp();
              setTimeout(function() {
                window.location.href = "<?= $config->url('auth/login.php') ?>";
              }, 1000);
            } else {
              $("#error").html("Your Email is Already Registered").slideDown().delay(1000).slideUp();
              $("#success").slideUp();
            }
          },
          error: function() {
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