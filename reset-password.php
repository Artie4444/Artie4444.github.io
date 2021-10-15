<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Pet Care Project</title>
  <meta content="A project to save stray animals" name="description">
  <meta content="stray, pets, adoption, donation " name="keywords">

  <!-- Favicons ( Image as a logo instead of the bing image) -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Template Vendor CSS File -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/fontawesome-free-5.15.4-web/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/login.css" rel="stylesheet">

 <!--End of head part-->
</head>

<body>

    <div class='signup-container'>
        <div class='left-container'>
        <h1>
            <i class="bi bi-box-arrow-in-right"></i>
            Reset Password
        </h1>
        <div class='puppy'>
            <img src="assets/img/logo2.png">
        </div>
        </div>
        <div class='right-container'>
        <header>
            <h1> Worry not! Reset your password now!</h1>
            <h2>An e-mail will be send to you with instructions on how to reset your password</h2>
            <form action="includes/reset-request.inc.php" method="post">
            <div class='form-group'>
            <div class='user-email'>
                <label for='user-email'>User email</label>
                <input id='user-email'name="email" placeholder="Enter your Email" type='text'>
            </div>
            </div>
            </form>
        </header>
        <footer>
            <div class='form-group2'>
            <button type="submit" id='submit' name="reset-request-submit">Receive Mail</button>
            </div>
        </footer>
        </div>
    </div>


</body>
</html>
  