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
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <script src="https://kit.fontawesome.com/7d1f9ca95d.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <title>탬플릿사이트제작</title>
</head>
<body>
  <script src="./js/header.js"></script>
  <header>
    <nav class="member">
      <ul>
        <li><a href="./index.php">처음으로</a></li>
        <li><a href="./login.php">로그인</a></li>
        <li><a href="#">회원가입</a></li>
      </ul>
    </nav>
    <div class="inner">
      <h1>
        <a href="./index.php">
          <img src="./img/scp/scp_korea.png" alt="">
        </a>
        <span class="hidden">사이트로고</span>
      </h1>
      <button class="mbtn">
        <i class="fa-solid fa-bars-staggered open"></i>
        <i class="fa-solid fa-xmark close"></i>
      </button>
    </div><!-- inner -->
    <nav class="gnb gnb-lg"> 
      <?php include "menu.php" ?>
    </nav>
    <nav class="gnb gnb-sm"> 
      <?php include "menu.php" ?>
    </nav>
  </header>