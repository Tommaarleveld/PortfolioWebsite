<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img id="logo" src="images/TomLogoWide.png" class="img-fluid">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs nav-justified justify-content-center">
            <li class="nav-item"><a class="nav-link custom-font" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link custom-font" href="about.html">About me</a></li>
            <li class="nav-item"><a class="nav-link custom-font" href="portfolio.html">My Work</a></li>
            <li class="nav-item"><a class="nav-link active custom-font" href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
        <div class="row top-buffer">
          <div class="col-md-4">
            <h1>Contact</h1><br>
          </div>
          <div class="col-md-12">
            <i class="fa fa-envelope-o" aria-hidden="true"></i><p>tom@tommaarleveld.com</p><br>
            <i class="fa fa-phone" aria-hidden="true"></i> <p>+316 141 56 378</p><br>
          </div>
        </div>
      <div class="row top-buffer-md">
        <div class= "col-md-12">
          <form action="contact.php" method="post" name="contact_form">
            <div class="row">
              <div class="col-md-12">
                <label><p>Voor- (en achternaam)</p></label>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="John Doe">
              </div>
              <div class="col-md-12 mt-5">
                <label><p>Email address</p></label>
                <input type="email" name="email" class="form-control form-control-lg" placeholder="name@example.com"><br>
              </div>
            </div>
            <div class="form-group">
              <label><p>Bericht</p></label>
              <textarea name="message" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="6"></textarea>
              <!-- <input type="submit" value="Verzenden"/> -->
              <button type="submit button" name="sendButton" class="btn btn-primary btn-lg color-yellow">Verzenden</button>
            </div>
          </form>
        </div>
      </div>
      <div id="footer">
        <div class="row">
          <div class="col-md-12">
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <img id="footer-logo" src="images/TomLogoWide.png" class="img-fluid">
          </div>
          <div class="col-md-10">
              <ul class="social float-right">
                  <li><a href="https://www.facebook.com/tom.maarleveld.3" class="face" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/steeztom" class="twit" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/tom-maarleveld-28505a14b" class="linkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
    <script src="https://use.fontawesome.com/827c131cd5.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $to = "tom@tommaarleveld.com";
      $subject = "New Message";
      $confirm = "Bericht succesvol verzonden!";
      //something posted
      if (isset($_POST['sendButton'])) {
        mail ($to, $subject, "Bericht van: " . $email . $message, "From: " . $name, "Email: " . $email);
        echo "<script type='text/javascript'>alert('$confirm');</script>";
      }
  }

?>
