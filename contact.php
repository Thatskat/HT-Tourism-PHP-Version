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
  <title>Contact Us || HT Tourism</title>
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
              <li><a href="./contact.html">Contact Us</a></li>
              <li><a class="none" href="https://www.coronavirus.vic.gov.au/" target="_blank">Covid-19 Information</a></li>
              <li><a href="./indexjpn.html">Change to Japanese</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Image and Info -->
  <section class="contact-us">
    <section class="contact-us-section">
      <h1>Contact Us</h1>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "httourism";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die ("Connection Failed:" . mysqli_connect_error());
} else {
  $contactfirst = mysqli_real_escape_string($conn, $_POST['first-name-contact']);
  $contactlast = mysqli_real_escape_string($conn, $_POST['last-name-contact']);
  $contactemail = mysqli_real_escape_string($conn, $_POST['email-contact']);
  $contactphone = mysqli_real_escape_string($conn, $_POST['phone-number-contact']);

  $sql = "INSERT INTO contactus VALUES (NULL, '$contactfirst', '$contactlast', '$contactemail', '$contactphone');";

  $result = mysqli_query($conn, $sql);

  if($result !== true) {
    echo "<p style='color:#be123c;font-weight:600;margin-top:1rem;margin-bottom:1rem;text-align:center;background-color:#ef4444:padding;1rem'>Missing Information - You need to enter all the required details.<p>";
  } else {
    echo "<p style='color:2A2B2B;font-weight:600;margin-top:1rem;margin-bottom:1rem;text-align:center;background-color:#bef264;padding:1rem'>Thank you " . $_POST['first-name-contact'] . " for enquiring with HT Tourism. Our friendly team will contact you via " . $_POST['email-contact'] . "!<p>";
  }
}
$conn->close();
?>
      <div class="contact-us-form">
        <p>If you would like to contact us, please fill out the form below:</p>
        <form action="./contact.php" method="post">
        <label for="first-name">First Name: </label>
        <input type="text" id="first-name"  name="first-name-contact" placeholder="Enter First Name">
        <label for="last-name">Last Name: </label>
        <input type="text" id="last-name"  name="last-name-contact" placeholder="Enter Last Name">
        <label for="email">Email: </label>
        <input type="email" id="email"   name="email-contact"placeholder="Enter Email">
        <label for="phone-number">Phone Number: </label>
        <input type="text" id="phone-number" name="phone-number-contact" placeholder="Enter Phone Number" >
        <input type="submit" name="submit-contact">
        </form>
        <p id="staff-form-notice">Our friendly staff will reply typically in 2 business days</p>
        <p class="term-conditions"><a href="https://edoc.lawpath.com/d-zd-ZbXbd-WcrRESEYYwC" target="_blank">HT Tourism Terms and Conditions</a></p>
      </div>
      </section>
  </section>

  
  <!-- Float Clear -->
  <div class="float-clear"></div>


  <!-- Social Media Icons -->
  <div class="social-media">
    <a href="https://www.facebook.com/pages/Hokkaido/108581545842039" target="_blank"><img class="social-logo" src="./social-media/facebook.png" alt="Facebook Logo"></a>
    <a href="https://www.instagram.com/hokkaidotourismht/" target="_blank"><img class="social-logo" src="./social-media/instagram.png" alt="Instagram Logo"></a>
    <a href="https://twitter.com/search?q=%23HOKKAIDO" target="_blank"><img class="social-logo" src="./social-media/twitter.png" alt="Twitter Logo"></a>
  </div>

    <!-- Top Page Arrow -->
    <div class="top-page">
      <a href="#top"><img class="social-logo" src="./img/arrow-up.png" alt="Up Arrow"></a>
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