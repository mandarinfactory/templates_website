<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/greet.css">
  <link rel="stylesheet" href="./css/location.css">
  <link rel="stylesheet" href="./css/register.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/exhib_permanent.css">
  <link rel="stylesheet" href="./css/exhib_special.css">
  <link rel="stylesheet" href="./css/library.css">
  <link rel="stylesheet" href="./css/gallery_viewbox.css">
  <link rel="stylesheet" href="./css/gallery_masonry1.css">
  <link rel="stylesheet" href="./css/gallery_masonry2.css">
  <link rel="stylesheet" href="./css/gallery_isotope.css">
  <link rel="stylesheet" href="./css/info.css">
  <link rel="stylesheet" href="./css/architect.css">
  <link rel="stylesheet" href="./css/notice.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/3/3f/Emblem_of_the_Government_of_the_Republic_of_Korea.svg">
  <script src="https://kit.fontawesome.com/7d1f9ca95d.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="./js/common.js"></script>
  <script src="./js/header.js"></script>
  <script src="./js/register.js"></script>
  <script src="./js/store.js"></script>
  <script src="./js/gallery_viewbox.js"></script>
  <script src="./js/jquery.viewbox.js "></script>
  <script src="./js/gallery_isotope.js "></script>
  <script src="./js/jquery.isotope.js "></script>
  <script src="./js/gallery_masonry.js "></script>
  <script src="./js/masonry-docs.min.js "></script>
  <title>탬플릿사이트제작</title>
</head>

<body>
  <nav class="container_register">
    <ul class="popcard">
      <img src="../museum/img/museum/rok_logo.png" alt="">
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
      <img src="../museum/img/museum/rok_logo.png" alt="">
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
  <div class="upper_header"></div>
  <header>
    <div class="header-top">
      <nav>
        <a href="login.php">
          <i class="fa-solid fa-right-to-bracket"></i>
          로그인
        </a>
        <a href="register.php">
          <i class="fa-solid fa-address-card"></i>
          회원가입
        </a>
        <a target="_blank" href="https://www.youtube.com/user/koreanmuseum">
          <i class="fa-brands fa-youtube"></i>
          YOUTUBE
        </a>
      </nav>
    </div>
    <!--header-top-->
    <div class="header-bottom">
      <h1>
        <a href="./index.php">
          <img src="./img/museum/museum.png" alt="">
        </a>
      </h1>
      <nav class="gnb gnb-lg">
        <?php include "menu.php" ?>
      </nav>
      <button class="mbtn">
        <i class="fa-solid fa-bars"></i>
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div><!-- header-bottom -->
    <nav class="gnb gnb-sm">
      <?php include "menu.php" ?>
    </nav>
  </header>