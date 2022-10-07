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
  <title>ホーム || HTツーリズム</title>
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
              <li><a href="./contactjpn.html">お問い合わせ</a></li>
              <li><a class="none" href="https://www.coronavirus.vic.gov.au/" target="_blank">Covid-19情報</a></li>
                <li><a href="./index.html">Change to English</a></li>
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
      <h1>HTツーリズムへ<span>ようこそ</span></h1>
      <p>お客様自身、お客様が会社のアディピシングを追求できるようになります。そして、これらの労働の存在を受け入れ、選出された後、そのことでさらに憎しみに苦しむ人々は、彼らの心の悩みを知らず、私たちが身体を非難する義務を簡単に非難するでしょう.借金をしている。長老たちは、欲望と喜びを持って、生まれ持ったものを提供します。</p>
      <p>会社自体は非常に成功している会社です。偉大な時代、特に現在から解放された時代の結果を得るには、彼らが達成するこれらの幸せな役職を彼に避けさせてください.</p>
    </div>
  </section>

  <!-- Float Clear -->
  <div class="float-clear"></div>
  
<!-- Home info -->
<section class="three-box-home">
  <div class="box bg-pink">
    <img class="home-icons" src="./img/info.png" alt="Info Logo">
    <h2>HTについて</h2>
    <p>会社自体は非常に成功している会社です。開口部は、喜びそのもののすべてを受け取る彼によって提供されるわずかな他人によって妨げられます.</p>
    <a class="btn btn-dark" href="./contactjpn.html">詳細を見る</a>
  </div>
  <div class="box bg-black">
    <img class="home-icons" src="./img/offer.png" alt="Offer Logo">
    <h2>北海道の魅力</h2>
    <p>顧客が非常に賢い場合、彼または彼女は望ましい結果を達成することができます。さまざまなサービスを提供しています。いわば憎しみから逃げている人々は、言われたことがありません。</p>
    <a class="btn btn-light" href="./dealsjpn.html">現在の取引</a>
  </div>
  <div class="box bg-pink">
    <img class="home-icons" src="./img/email.png" alt="Email Logo">
    <h2>メールプロモーションにサインアップ</h2>
    <p>ここからサインアップして、限定オファーとコンテストに参加してください </p>     
    <form action="./indexjpn.php" method="post">
      <label for="email-promo">Eメール</label>
      <input name="email-promo" type="email" id="email-promo" placeholder="ここにメールを入力">
      <input type="submit" id="sign-up-btn" value="送信">
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
    echo "<p style='color:#be123c;font-weight:600;margin-top:0.3rem;rem;margin-bottom:0.5rem'>不足している情報 - 必要な詳細をすべて入力する必要があります。<p>";
  } else {
    echo "<p style='color:2A2B2B;font-weight:600;margin-top:0.5rem;margin-bottom:0.5rem'> HT Tourism のプロモーション メールにご登録いただきありがとうございます。 " . $_POST['email-promo'] . "!<p>";
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