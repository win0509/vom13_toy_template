<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome || Sign In</title>
   <!-- Remix Icon Link -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="/common_template/CSS/common.css">
  <link rel="stylesheet" href="/common_template/CSS/header.css">
  <link rel="stylesheet" href="/common_template/CSS/signup.css">
  <link rel="stylesheet" href="/common_template/CSS/responsive.css">




</head>
<body>
  <div class="wrapper signin">
    <!-- header -->
  <header id="header" class="header">
     <div class="container">
      

      <?php include $_SERVER['DOCUMENT_ROOT']."/common_template/include/nav.php"; ?>
      <div class="logo">
       <a href="/conmon_template/index.php"><img src="images/logo.svg" alt="soaply"></a>
      </div>

      <?php include $_SERVER['DOCUMENT_ROOT']."/common_template/include/info.php"; ?>
      

      <div class="mobile-btn-wrapper">
        <div class="mobile-btn not-active">
          <span class="bar_line"></span>
          <span class="bar_line"></span>
          <span class="bar_line"></span>
        </div>
      </div>
     </div>
    </header>

    <form action="/common_template/signin.php" method="post" class="form">
      <h2>SIGN IN</h2>
      <p><input type="text" name="id" placeholder="아이디"></p>
      <p><input type="password" name="pwd" placeholder="비밀번호"></p>
      <p class="smbtn"><input type="submit" value="로그인 하기"></p>
      <p class="line"></p>
      <p class="is-member">
        <b>아직 회원이 아니세요?</b> | <a href="/common_template/signup.html">회원가입 하기</a>
      </p> 
    </form>
  </div>
</body>
</html>