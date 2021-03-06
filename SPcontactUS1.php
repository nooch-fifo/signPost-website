<?php
/*echo "<pre>";

  print_r($_POST);



  $firstName = $_POST['first'];
  $lastName = $_POST['last'];
  $userEmail = $_POST['email'];
  $phoneNumber = $_POST['phone'];
  $message = $_POST['message'];

  $to = "dominic.rego17@gmail.com";
  $body = "";
  $subject = "Sign Post Inquiry";

  $body .= "From: ".$firstName.$lastName. "\r\n";
  $body .= "Email: ".$userEmail. "\r\n";
  $body .= "Message: ".$message. "\r\n";


  mail($to,$subject,$body);
echo '</pre>';*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <title> Contact Us | The Sign Post NJ </title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles42.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  </head>
  <body>
    <header>
      <a href="http://localhost/SPtest.php" class="logo">
        <img src="SPLOGO21.png" alt="nav_logo">
      </a>
      <ul>
        <li><a href="http://localhost/SPtest.php">Home</a>
        <li><a href="http://127.0.0.1:5500/SPNJwork.html">Our Work</a>
        <li><a href="http://127.0.0.1:5500/SPNJcontact.html">Contact Us</a>
        <li><a href="#">About</a>
      </ul>
    </header>

    <section class="hero">
  <div class="container">
      <div class="main-message">
    <!--      <h3 style="color:black;"><u>THIRD GENERATION OF QUALITY SIGN MAKING</u></h3>
          <h1> The Sign Post </h1>
          <p>Located on 357 Broad St, Bloomfield, NJ, 07003 </p>
          <div class="cta">
              <a href="http://localhost/SPcontactUS1.html" class="btn">Contact Us Today</a>-->
          </div>
      </div>
  </div>
</section>

<section class="social-media">
    <div class="social-heading">
        <h3> Like What You See?</h3>
            <p>Message us down below with any questions, comments, concerns, or inquiries!<br>
            If you liked a specific example from our gallery, simply reference it in your message by naming the album name and <br>the photo's number from left to right.<br>
       </p> <br>

    </div>
</section>

<section class="cube">
<!-- Swiper -->
  <div class="cube-wrapper">
  <div class="swiper-container">
    <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image:url(laserBG.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(gallerySSexample.png)"></div>
      <div class="swiper-slide" style="background-image:url(messageSS1.JPG)"></div>
      <div class="swiper-slide" style="background-image:url(printerBG.jpg)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>
<p><br><br> For example, just cite "Banners - 3" when referencing the school sports banner.</p>
</section>

    <section class="banner">
      <div class="container">
        <div class="contactinfo">
          <div>
            <h2> Contact Info </h2>
            <ul class="info">
              <li>
                  <span>
                      <a href="https://www.google.com/maps/dir//40.8053094,-74.1922144/@40.805309,-74.192214,18z?hl=en-US">
                        <img src="location.png"></a></span>
                      <span>357 Broad St <br>
                        Bloomfield, NJ<br>
                        07003</span>
              </li>
              <li>
                <span>
                    <img src="mail.png"></span>
                    <span>info@signpostnj.com</span>
                </li>
                <li>
                    <span>
                        <img src="call.png"></span>
                        <span>(973)743-5051</span>
                </li>
            </ul>
          </div>
            <ul class="sci">
                <li><a href="https://www.facebook.com/signpostnj/?ref=page_internal"><img src="SM1.png"></a></li>
                <li><a href="https://www.instagram.com/signpost_nj/"><img src="SM2.png"></a></li>
            </ul>
        </div>
        <div class="contactForm">
          <form action="SPcontactUS1.php" method="POST" class="form">
            <h2>Send Us a Message</h2>
            <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="first" required>
                        <span>First Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="last" required>
                        <span>Last Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="email" required>
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="phone" required>
                        <span>Mobile Number</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea name="message" required></textarea>
                        <span>Write your message here...</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="Send">
                    </div>
            </div>
          </form>
        </div>
    </div>
  </section>


<footer class="sticky-footer">
  <ul>
    <li><a href="#" class="grow">Home</a></li>
    <li><a href="http://127.0.0.1:5500/SPNJwork.html">Our Work</a></li>
    <li><a href="http://127.0.0.1:5500/SPNJcontact.html">Contact Us</a></li>
    <li><a href="#">About</a></li>
  </ul>
  <br>
  <a href="http://localhost/SPtest.php">
    <img src="SPLOGO21.png" alt="" height="50" width="77">
  </a>
</footer>

  <!-- Swiper JS -->
  <!--<script src="../package/swiper-bundle.min.js"></script>-->
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>

  <!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'cube',
    grabCursor: true,
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 1.24,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>



  </body>
</html>
