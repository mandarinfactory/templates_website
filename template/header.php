<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/register.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/index_desc.css">
  <link rel="stylesheet" href="./css/sub_index.css">
  <link rel="stylesheet" href="./css/greet.css">
  <link rel="stylesheet" href="./css/location.css">
  <link rel="stylesheet" href="./css/contact.css">
  <link rel="stylesheet" href="./css/biz-intro.css">
  <link rel="stylesheet" href="./css/biz-area.css">
  <link rel="stylesheet" href="./css/video.css">
  <link rel="stylesheet" href="./css/gallery_isotope.css">
  <link rel="stylesheet" href="./css/gallery_masonry.css">
  <link rel="stylesheet" href="./css/gallery_viewbox.css">
  <link rel="stylesheet" href="./css/justifiedGallery.min.css">
  <link rel="stylesheet" href="./css/viewbox.css">
  <link rel="stylesheet" href="./css/faq.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/preloader.css">
  <link rel="stylesheet" href="./css/popup.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <link rel="stylesheet" href="./css/animation_template.css">
  <link rel="stylesheet" href="./css/isotope.css">
  <link rel="stylesheet" href="./css/bubble-particle.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://logosandtypes.com/wp-content/uploads/2022/04/oasis-festival.svg ">
  <script src="https://kit.fontawesome.com/7d1f9ca95d.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="./js/common.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/register.js"></script>
  <script src="./js/header.js"></script>
  <script src="./js/location.js"></script>
  <script src="./js/video.js"></script>
  <script src="./js/jquery.viewbox.js"></script>
  <script src="./js/gallery_viewbox.js"></script>
  <script src="./js/gallery_isotope.js"></script>
  <script src="./js/masonry-docs.min.js"></script>
  <script src="./js/jquery.justifiedGallery.min.js"></script>
  <script src="./js/jquery.isotope.js"></script>
  <script src="./js/responsive_carousel_horz.js"></script>
  <script src="./js/bubble.js"></script>
  <script src="./js/morphsvg.js"></script>
  <script src="./js/tweenmax.js"></script>
  <script src="./js/type_effect.js"></script>
  <script src="./js/preloader.js"></script>
  <title>탬플릿사이트제작</title>
</head>

<body>
  <?php include "preloader.php" ?>
  <nav class="container_register">
    <ul class="popcard">
      <img src="../template/img/sunset.png" alt="">
      <i class="fa-solid fa-xmark close"></i>
      <li class="bold">
        회원가입
      </li>
      <li class="text">아이디</li>
      <li>
        <input type="text" placeholder="사용할 아이디를 입력하세요.">
      </li>
      <li>
        <button>아이디 확인</button>
      </li>
      <li class="text">비밀번호</li>
      <li>
        <input type="password" placeholder="사용할 비밀번호를 입력하세요.">
      </li>
      <li>
        <input type="password" placeholder="사용할 비밀번호를 다시 입력해주세요.">
      </li>
      <li>
        <button>비밀번호 확인</button>
      </li>
      <li class="text">전화번호</li>
      <li>
        <input type="tel" placeholder="전화번호를 - 없이 적어주세요.">
      </li>
      <li>
        <button>전화번호 확인</button>
      </li>
      <li class="text">E-MAIL</li>
      <li>
        <input type="email" placeholder="이메일을 적어주세요.">
      </li>
      <li>
        <button>회원가입</button>
      </li>
    </ul>
  </nav>
  <nav class="container_register_global">
    <ul class="popcard">
      <img src="../template/img/sunset.png" alt="">
      <i class="fa-solid fa-xmark close"></i>
      <li class="bold">
        register
      </li>
      <li class="text">ID</li>
      <li>
        <input type="text" placeholder="ID">
      </li>
      <li>
        <button>confirm ID</button>
      </li>
      <li class="text">PASSWORD</li>
      <li>
        <input type="password" placeholder="password">
      </li>
      <li>
        <input type="password" placeholder="checking the password">
      </li>
      <li>
        <button>confirm PW</button>
      </li>
      <li class="text">CELL-PHONE</li>
      <li>
        <input type="tel" placeholder="enter your cell-number without hyphen('-')">
      </li>
      <li>
        <button>confirm num</button>
      </li>
      <li class="text">E-MAIL</li>
      <li>
        <input type="email" placeholder="e-mail">
      </li>
      <li>
        <button>REGISTER</button>
      </li>
    </ul>
  </nav>
  <header>
    <nav class="member">
      <ul>
        <li><a href="./index.php">처음으로</a></li>
        <li><a href="./login.php">로그인</a></li>
        <li><a href="./register.php">회원가입</a></li>
      </ul>
    </nav>
    <?php include "img/svg/horizontal_dec.php" ?>
    <div class="inner">
      <h1>
        <a href="./index.php">
          <img src="./img/icon_logo/logo.gif" alt="">
        </a>
        <span class="hidden">사이트로고</span>
      </h1>
      <button class="mbtn">
        <i class="fa-solid fa-bars open"></i></i>
        <i class="fa-solid fa-xmark close"></i>
      </button>
    </div><!-- inner -->
    <nav class="gnb gnb-lg">
      <?php include "img/svg/horizontal_dec.php" ?>
      <?php include "menu.php" ?>
    </nav>
    <nav class="gnb gnb-sm">
      <div class="inner">
        <?php include "menu.php" ?>
        <?php include "img/svg/vertical_dec.php" ?>
      </div>
    </nav>
  </header>
  <button class="top-btn">
    <i class="fa-solid fa-circle-up"></i>
  </button>