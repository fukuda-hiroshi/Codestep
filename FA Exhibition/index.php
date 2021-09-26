<!doctype html>
<?php
$date = date('YmdHis')?>
<html lang="">
<head>
  <meta charset="utf-8">
  <title>FA Exhibition</title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css?<?php echo $date ?>">
  <!-- <link rel="stylesheet" href="css/slick-theme.css?<?php echo $date ?>">
  <link rel="stylesheet" href="css/slick.css?<?php echo $date ?>">
  <link rel="stylesheet" href="css/slider.css?<?php echo $date ?>"> -->
  <link rel="stylesheet" href="css/common.css?<?php echo $date ?>">
  <!-- <link rel="stylesheet" href="css/style.css?<?php echo $date ?>"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/jquery.inview.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> -->
  <!-- <script src="js/slick.min.js"></script>
  <script src="js/sliderConfig.js?<?php echo $date ?>"></script> -->

  

</head>
<body id="top">
  <header>
    <img id="logo" src="./img/logo.svg" alt="">
    <nav id="navi">
      <ul class="nav_top">
        <li>TOP</li>
        <li>INFOMATION</li>
        <li>GALLERY</li>
        <li>ACCESS</li>
        <li>CONTACT</li>
      </ul>
    </nav>
    <div class="toggle_btn">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>
  <div id="wrap">
    <div id="contents">
      <div id="mainvisual">
        <img src="./img/mainvisual1.jpg" alt="">
        <img id="mainv_center" src="./img/mainvisual2.jpg" alt="">
        <img src="./img/mainvisual3.jpg" alt="">
      </div>
      <h1>
        Hello Flower!<br>FA EXHIBITION 2021
      </h1>
      <section id="information">
        <h2><span>INFORMATION</span></h2>
        <ul>
          <li><span class="day-en">2021 JUL 1(THU)-3(SAT)</span><br><span class="time-en">DAY1 10am-6pm OTHER 10am-5:30pm</span></li>
          <li><span class="place">at PARK SIDE HALL</span></li>
          <li><span class="day-ja">2021年7月1日(木)ー3日(土)</span><br><span class="time-ja">Day1 10時〜18時　その他 10時〜17時30分</span></li>
        </ul>
      </section>
      <section id="gallery">
        <h2><span>GALLERY</span></h2>
        <ul>
          <li class="inview fadein"><img src="./img/flower1.jpg" alt=""></li>
          <li class="inview fadein"><img src="./img/flower2.jpg" alt=""></li>
          <li class="inview fadein"><img src="./img/flower3.jpg" alt=""></li>
          <li class="inview fadein"><img src="./img/flower4.jpg" alt=""></li>
          <li class="inview fadein"><img src="./img/flower5.jpg" alt=""></li>
          <li class="inview fadein"><img src="./img/flower6.jpg" alt=""></li>
        </ul>
      </section>
      <section id="access">
        <h2><span>ACCESS</span></h2>
        <div>
          <p><span>PARK SIDE HALL</span></p>
          <p><span>〒152-0035 東京都目黒区自由が丘1-1-1 PARK SIDE HALL PARK SIDE HALL, 1-1-1 Jiyugaoka, Meguro-ku, Tokyo</span></p>
          <p><span>Tel: 03-1111-1111<br>E-mail: info@xxxxxxx.jp</span></p>
          <a href="">GOOGLE MAP</a>
        </div>
      </section>
      <section id="contact">
        <h2><span>CONTACT</span></h2>
        <a href="">出典に関するお問い合わせ</a>
        <a href="">その他のお問い合わせ</a>
      </section>
      <div class="bg"></div>
    </div>
  </div>
  <footer>
    <ul class="infolist">
      <li>FA EXHIBITION</li>
      <li>〒152-0035 東京都目黒区自由が丘1-1-1 PARK SIDE HALL</li>
      <li>Tel: 03-1111-1111</li>
      <li>E-mail: info@xxxxxxx.jp</li>
    </ul>
    <ul class="outerlist">
      <li>
        <ul class="snslist">
          <li>Twitter</li>
          <li>Facebook</li>
          <li>Instagram</li>
        </ul>
      </li>
      <li>
        <ul class="captionlist">
          <li>PRIVACY POLICY</li>
          <li>© FA EXHIBITION</li>
        </ul>
      </li>
    </ul>
  </footer>
  <script src="js/main.js?<?php echo $date ?>"></script>
  
</body>
</html>
