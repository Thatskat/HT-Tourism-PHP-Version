<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FTN77T75XQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FTN77T75XQ');
</script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home || HT Tourism</title>
   <!-- Style Sheet -->
   <link rel="stylesheet" media="screen and (min-width:1201px)" href="./css/desktop.css">
  <link rel="stylesheet" media="(min-width:769px) and (max-width:1200px)" href="./css/normal.css">
  <link rel="stylesheet" media="(min-width:501px) and (max-width:769px)" href="./css/tablet.css">
  <link rel="stylesheet" media="screen and (max-width:500px)" href="./css/smartphone.css">
  <!-- Flaticon -->
  <link rel="icon" type="image/x-icon" href="./icon/new-updated-ht-tourism-logo.svg">
<body>
  <!-- NavBar -->
  <header>
    <div class="navbar">
      <div class="left-image">
        <ul class="left-navbar"> 
          <li><a  href="./index.html" id="logo"><img src="./icon/new-updated-ht-tourism-logo.svg" alt="HT Tourism Logo"></a></li>
        </ul>
      </div>
      <div class="right-navbar">
        <div class="dropdown">
          <p><img src="./img/menu.png" alt="Menu Icon"></p>
          <ul class="dropdown-content">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./deals.html">Holiday Deals</a></li>
              <li><a href="./book.html">Book Now</a></li>
              <li><a class="none hide-normal" href="./contact.html">Contact Us</a></li>
              <li><a class="none hide-normal" href="https://www.coronavirus.vic.gov.au/" target="_blank">Covid-19 Information</a></li>
              <li><a href="./indexjpn.html">Change to Japanese</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Image and Info -->
  <section class="home-container">
    <div id="main-home-image">
      <img src="./img/index-main.jpg" alt="Hokkaido covered in snow">
    </div>
    <div id="main-home-info">
      <h1>Welcome to <span>HT Tourism</span></h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui eaque esse laborum excepturi et delectus soluta consequatur odio rem illo porro amet eum culpa harum animi nesciunt molestias, facilis reprehenderit officiis quo corporis accusamus debitis facere. Maiores cupiditate, voluptate quibusdam ipsa quas esse eos natus, provident, tenetur dolore sit sapiente?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consequatur magni temporibus, maxime soluta praesentium fugiat, harum ullam beatae officiis quas consequuntur.</p>
    </div>
  </section>

  <!-- Float Clear -->
  <div class="float-clear"></div>
  
<!-- Home info -->
<section class="three-box-home">
  <div class="box bg-pink">
    <img class="home-icons" src="./img/info.png" alt="Info Logo">
    <h2>About HT</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam impedit minima alias provident iste qui atque voluptas ipsa suscipit totam.
    </p>
    <a class="btn btn-dark" href="./contact.html">Find Out More</a>
  </div>
  <div class="box bg-black">
    <img class="home-icons" src="./img/offer.png" alt="Offer Logo">
    <h2>What Hokkaido has to Offer</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio ducimus at modi officiis. Qui quasi, fuga sunt odio numquam dicta.</p>
    <a class="btn btn-light" href="./deals.html">Our Current Deals</a>
  </div>
  <div class="box bg-pink">
    <img class="home-icons" src="./img/email.png" alt="Email Logo">
    <h2>Sign Up for Email Promotions</h2>
    <p>Sign up here for exclusive offers and competitions</p>
    <form action="./index.php" method="post">
      <label for="email-promo">Email:</label>
      <input name="email-promo" type="email" id="email-promo" placeholder="Enter Email Here">
      <input type="submit" id="sign-up-btn" value="Submit">
    </form>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "httourism";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die ("Connection Failed:" . mysqli_connect_error());
} else {
  $email = mysqli_real_escape_string($conn, $_POST['email-promo']);

  $sql = "INSERT INTO promo VALUES (NULL, '$email');";

  $result = mysqli_query($conn, $sql);

  if($result !== true) {
    echo "<p style='color:#be123c;font-weight:600;margin-top:0.5rem;margin-bottom:0.5rem'>Missing Information - You need to enter all the required details.<p>";
  } else {
    echo "<p style='color:2A2B2B;font-weight:600;margin-top:0.5rem;margin-bottom:0.5rem'>Thank you for signing up for HT Tourism's promotional emails " . $_POST['email-promo'] . "!<p>";
  }
}
$conn->close();
?>
  </div>
</section>

  <!-- Float Clear -->
  <div class="float-clear"></div>

  <!-- Social Media Icons -->
  <div class="social-media">
    <div>
      <a href="https://www.facebook.com/pages/Hokkaido/108581545842039" target="_blank"><img class="social-logo" src="./social-media/facebook.png" alt="Facebook Logo"></a>
      <a href="https://www.instagram.com/hokkaidotourismht/" target="_blank"><img class="social-logo" src="./social-media/instagram.png" alt="Instagram Logo"></a>
      <a href="https://twitter.com/search?q=%23HOKKAIDO" target="_blank"><img class="social-logo" src="./social-media/twitter.png" alt="Twitter Logo"></a>
    </div>
  </div>


<!-- Footer -->
<footer>
  <div class="social-media-footer">
    <div>
      <a href="https://www.facebook.com/pages/Hokkaido/108581545842039" target="_blank"><img class="social-logo-footer" src="./social-media/facebook.png" alt="Facebook Logo"></a>
      <a href="https://www.instagram.com/hokkaidotourismht/" target="_blank"><img class="social-logo-footer" src="./social-media/instagram.png" alt="Instagram Logo"></a>
      <a href="https://twitter.com/search?q=%23HOKKAIDO" target="_blank"><img class="social-logo-footer" src="./social-media/twitter.png" alt="Twitter Logo"></a>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th>Company Address: </th>
        <th>Phone Number: </th>
        <th>Email: </th>
      </tr>
    </thead>
 <tbody>
  <tr>
    <td>1117 Nepean Hwy, Highett VIC 3190</td>
    <td>(03) 8001 8189</td>
    <td>inquiries@hokkaidotourismht.com.au</td>
  </tr>
 </tbody>
  </table>
  <p>Hokkaido Tourism Pty Ltd &copy; 2022</p>
  <a class="covid-footer" href="./contact.html">Contact Us</a>
 <a class="covid-footer" href="https://www.coronavirus.vic.gov.au/" target="_blank">Covid-19 Information</a>
<a class="credit-link" href="./credit.html">Website Credits</a>
</footer>

</body>
</html>
