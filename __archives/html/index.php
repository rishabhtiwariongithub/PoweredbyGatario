<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Form</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Facebook</h1>
        <p>Facebook helps you connect and share<br> with the people in your life.</p>
    </div>

    <header>
        <form id="loginForm">
            <div class="box">
                <input type="email" name="Email" id="email" placeholder="Email address "><br>
                <input type="password" name="Password" id="password" placeholder="Password">
            </div>

            <div class="link">
                <button id="login">Log In</button>
            </div>

            <div class="link1">
                <a class="forget" href="forget.html">Forgotten Password?</a>
            </div>

            <div class="link2">
                <a class="create" href="createacc.html">Create New Account</a>
            </div>
        </form>
        <div id="error"></div>
        <div id="success"></div>
    </header>
    <script src="../js/jquery.js"></script>
    <script>
          $(document).ready(function() {
            $("#login").on("click", function(e) {
                e.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();

                if (email === "" || password === "") {
                    // Display error message if fields are empty
                    $("#error").html("All fields are required").slideDown();
                    $("#success").slideUp();
                    setTimeout(function() {
                        $("#error").slideUp();
                    }, 1000); // Hide the error message after 1 second
                } else {
                    $.ajax({
                        url: "../php/ajax-login-data.php",
                        type: "POST",
                        data: { Email: email, Password: password},
                        success: function(data) {
                            if (data === "1") {
                                // Redirect to dashboard.php on successful login
                                window.location.href = "dashboard.php";
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
</body>
</html>
