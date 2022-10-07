<!DOCTYPE html>
<html lang="ja">
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
  <title>お問い合わせ || HTツーリズム</title>
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
              <li><a  href="./indexjpn.html" id="logo"><img src="./icon/new-updated-ht-tourism-logo.svg" alt="HT Tourism Logo"></a></li>
            </ul>
          </div>
          <div class="right-navbar">
            <div class="dropdown">
              <p><img src="./img/menu.png" alt="Menu Icon"></p>
              <ul class="dropdown-content">
                <li><a href="./indexjpn.html">家</a></li>
                <li><a href="./dealsjpn.html">ホリデーセール</a></li>
                  <li><a href="./bookjpn.html">今予約する</a></li>
                  <li><a class="none" href="./contactjpn.html">お問い合わせ</a></li>
                  <li><a class="none" href="https://www.coronavirus.vic.gov.au/" target="_blank">Covid-19情報</a></li>
                    <li><a href="./contact.html">Change to English</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>

  <!-- Page Image and Info -->
  <section class="contact-us">
    <div class="contact-us-section">
      <h1>お問い合わせ</h1>
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
    echo "<p style='color:#be123c;font-weight:600;margin-top:1rem;margin-bottom:1rem;text-align:center;background-color:#ef4444:padding;1rem'>不足している情報 - 必要な詳細をすべて入力する必要があります。<p>";
  } else {
    echo "<p style='color:2A2B2B;font-weight:600;margin-top:1rem;margin-bottom:1rem;text-align:center;background-color:#bef264;padding:1rem'>ありがとうございました " . $_POST['first-name-contact'] . " HT ツーリズムにお問い合わせください。私たちのフレンドリーなチームがあなたに連絡します " . $_POST['email-contact'] . "!<p>";
  }
}
$conn->close();
?>
      <div class="contact-us-form">
        <p>お問い合わせフォーム</p>
        <form action="./contactjpn.php" method="post">
          <label for="first-name">ファーストネーム： </label>
          <input type="text" id="first-name" placeholder="名を入力してください」" name="first-name-contact">
          <label for="last-name">苗字：</label>
          <input type="text" id="last-name" placeholder="姓を入力" name="last-name-contact">
          <label for="email">Eメール： </label>
          <input type="email" id="email" placeholder="メールアドレスを入力して" name="email-contact">
          <label for="phone-number"> 電話番号： </label>
          <input type="text" id="phone-number" placeholder="電話番号を入力" name="phone-number-contact">
          <input type="submit" name="submit-contact" value="送信">
        </form>
        <p id="staff-form-notice">フレンドリーなスタッフが通常 2 営業日以内に返信します</p>
        <p class="term-conditions"><a href="https://edoc.lawpath.com/d-zd-ZbXbd-WcrRESEYYwC" target="_blank">HTツーリズム利用規約</a></p>
      </div>
      </div>
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
      <th>会社住所: </th>
      <th>電話番号： </th>
      <th>Eメール </th>
    </tr>
    </thead>
<tbody>
   <tr>  
      <td>1117 Nepean Hwy、Highett VIC 3190</td>
      <td>(03) 8001 8189</td>
      <td>inquiries@hokkaidotourismht.com.au</td>
    </tr>
</tbody>
  </table>
  <p>Hokkaido Tourism Pty Ltd &copy; 2022</p>
  <a class="covid-footer" href="./contactjpn.html">お問い合わせ</a>
 <a class="covid-footer" href="https://www.coronavirus.vic.gov.au/" target="_blank">Covid-19情報</a>
<a class="credit-link" href="./creditjpn.html">ウェブサイトのクレジット</a>
</footer>



</body>
</html>