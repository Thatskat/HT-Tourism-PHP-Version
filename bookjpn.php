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
  <title>|| 今すぐ予約 || 今すぐ予約HTツーリズム</title>
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
                  <li><a href="./book.html">Change to English</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  <!-- Booking page heading -->
  <section class="booknow-heading">
    <div class="booking-page">
      <div class="book-title">
        <h1>今予約<span>する</span></h1>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "httourism";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die ("Connection Failed:" . mysqli_connect_error());
} else {
  $holidaydeal = mysqli_real_escape_string($conn, $_POST['holiday-deal']);
  $adults = mysqli_real_escape_string($conn, $_POST['adults']);
  $children = mysqli_real_escape_string($conn, $_POST['children']);
  $startdate = mysqli_real_escape_string($conn, $_POST['start-date']);
  $enddate = mysqli_real_escape_string($conn, $_POST['end-date']);
  $firstname = mysqli_real_escape_string($conn, $_POST['first-name-book']);
  $lastname = mysqli_real_escape_string($conn, $_POST['last-name-book']);
  $email = mysqli_real_escape_string($conn, $_POST['email-book']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone-book']);

  $sql = "INSERT INTO booknow VALUES (NULL,'$holidaydeal' , '$adults' , '$children' , '$startdate' , '$enddate' , '$firstname' , '$lastname' , '$email' , '$phone');";

  $result = mysqli_query($conn, $sql);

  if($result !== true) {
    echo "<p style='color:#be123c;font-weight:600;margin-top:1rem;margin-bottom:1rem;text-align:center;background-color:#ef4444:padding;1rem'>Ops - 何か問題が発生しました。すべての必須フィールドに入力し、フォームを再度送信してください。<p>";
  } else {
    echo "<p style='color:2A2B2B;font-weight:600;margin-top:1rem;margin-bottom:1rem;text-align:center;background-color:#bef264;padding:1rem'>
    ありがとうございました " . $_POST['first-name-book'] . " HT ツーリズムで北海道の休暇を予約してください。の予約を確認するメールがすぐに届きます " . $_POST['holiday-deal'] . " から始まる " . $_POST['start-date'] . " に " . $_POST['end-date']. ".<p>";
  }
}
$conn->close();
?>
        <form action="./bookjpn.php" method="post">
          <div class="holiday-deal-class">
            <p>HTホリデーディールを選択してください</p>
            <label for="holiday-deal">ホリデーディールパッケージ： </label>
            <select name="holiday-deal" id="holiday-deal">
            <option value="Deal One">ディール ワン</option>
            <option value="Deal Two">ディール 2</option>
            <option value="Deal Three">ディールスリー</option>
            <option value="Deal Four">ディール フォー</option>
            <option value="Deal Five">ディールファイブ</option>
            <option value="Deal Six">ディール シックス</option>
            </select>
          </div>
          <div class="adult-child-number">
          <p> 誰がこの冒険に来ますか?</p>
         <label for="number-adults">大人: </label>
         <select name="adults" id="number-adults">
         <option value="one-adult">一</option>
         <option value="two-adult">二</option>
        <option value="three-adult"> 三</option>
        <option value="four-adult"> 四</option>
      <option value="five-adult">五</option>
      <option value="other-adult">6+</option>
    </select>
    <label for="number-children">子供 (18 歳未満): </label>
    <select name="children" id="number-children">
      <option value="zero-child"> 〇</option>
      <option value="one-child">一</option>
      <option value="two-child">二</option>
      <option value="three-child">三</option>
      <option value="four-child">四</option>
      <option value="five-child">五</option>
      <option value="other-child" id="other-child">6+</option>
    </select>
  </div>

  <p>何日？</p>
          <label for="start-date">開始日： </label>
          <input type="date" id="start-date" name="start-date" min="2022-08-25" max="2024-12-31">
          <label for="end-date">終了日： </label>
          <input type="date" id="end-date" name="end-date" min="2022-08-26" max="2025-01-07"> <br>
          <p>あなたについて調べてみましょう！</p>
          <label for="first-name">ファーストネーム： </label>
          <input type="text" id="first-name" name="first-name-book" placeholder="Enter First Name">
          <label for="last-name">苗字： </label>
          <input type="text" id="last-name" name="last-name-book" placeholder="Enter Last Name">
          <label for="email"> Eメール： </label>
          <input type="email" id="email" placeholder="Enter Email" name="email-book">
          <label for="ph-number" id="phone-number">電話番号： </label>
          <input type="text" id="ph-number" placeholder="Enter Phone Number" name="phone-book">
          <input type="submit" name="submit" value="
          送信">
          <p class="term-conditions"><a href="https://edoc.lawpath.com/d-zd-ZbXbd-WcrRESEYYwC" target="_blank"> HTツーリズム利用規約</a></p>
        </form>
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