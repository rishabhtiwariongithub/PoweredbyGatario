<?php
  $pageTitle = 'Reset Password';
  require __DIR__ . '/../_modules/components/header.php';
?>


<div class="container-auth min-h-100">
  <div class="card-form" style="padding: 42px 12px; width: 100%;">
    <div class="text-center mb-3">
      <h1 class="text-primary" style="font-size: 2em;">Facebook</h1>
    </div>
    <form id="user-search-form" class="mb-2">
      <input type="email" name="Email" id="email" placeholder="Email address or phone number" class="mb-2">

      <button type="submit" class="btn btn-primary">Search Account</button>
    </form>

    <div class="text-center">
      <div id="error" class="text-red"></div>
      <div id="success" class="text-green"></div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $(document).bind("mousemove keypress", function() {
      clearTimeout(sessionTimeout);
      sessionTimeout = setTimeout(sessionExpired, 60000); // 10 minutes
    });

    function sessionExpired() {
      alert("Your session has expired.");
      sessionStorage.clear(); // Clear the sessionStorage
      window.location.href = "<?= $config->url('auth/login.php') ?>"; // Redirect to the login page
    }

    $("#user-search-form").on("submit", function(e) {
      e.preventDefault(); // Prevent the default form submission

      const email = $("#email").val();

      if (email === "") {
        $("#error").html("All fields are required").slideDown().delay(1000).slideUp();
        $("#success").slideUp();
      } else {
        $.ajax({
          url: "<?= $config->url('_ajax/search-user.php') ?>",
          type: "POST",
          data: { Email: email },
          success: function(data) {
            if (data === "1") {
              setTimeout(function() {
                window.location.href = "<?= $config->url('auth/change-password.php') ?>";
              }, 1000);
            } else {
              $("#error").html("Can't Find Your Account").slideDown().delay(1000).slideUp();
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