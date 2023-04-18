<!-- www.dabipyeung.com/soaply -->
<!--
수정사항
1.special offers 상품 설명글 반응형 행수 줄이기
2.json cors 오류 수정

-->

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <!-- Favicon Link -->
 <link rel="shortcut icon" href="./favicon.png">
 <link rel="apple-touch-icon" href="./favicon.png">

 <!-- Remix Icon Link -->
 <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

 <!-- Swiper Slider Link -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

 <!-- Main Stylesheet link -->
 <link rel="stylesheet" href="/common_template/CSS/header.css">
 <link rel="stylesheet" href="/common_template/CSS/common.css">
 <link rel="stylesheet" href="/common_template/CSS/main.css">
 <link rel="stylesheet" href="/common_template/CSS/responsive.css">

  

</head>
<body>
  <div class="wrapper">
    <!------------------ Header  ------------------>
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

        <div class="mobile-menu">
        <?php include $_SERVER['DOCUMENT_ROOT']."/common_template/include/nav.php"; ?>
        <?php include $_SERVER['DOCUMENT_ROOT']."/common_template/include/info.php"; ?>
        </div>
     </div>
    </header>

    <!-------------- Landing Section ----------------->
    <section id="main-section" class="section landing-section">
      <img src="images/landing-image.jpeg" alt="soaply main image">
      <div class="landing-text-box container">
       <h1>소플리 컬렉션<br>자연을 담은 수제 천연 비누</h1>
       <p>츠긴 로으즐멘 벘어 즘드끼녁지만, 끠산나가 엤기한테 스나팡일 겐다메다 칸깅수완의 들븡만자는 억싱함을. 러아니롤</p>
       <a href="#" class="common-btn">Shop Now</a>
      </div>
      <div class="overlay"></div>
    </section>

      <!----------------------Meet Section  ------------------------>
    <section class="meet-section section">
      <div class="container">
        <div class="meet-wrapper">
          <div class="meet-text-box">
            <h4>MEET SOAPLY MASTER</h4>
            <p>츠긴 로으즐멘 벘어 즘드끼녁지만, 끠산나가 엤기한테 스나팡일 겐다메다 칸깅수완의 들븡만자는 억싱함을. 러아니롤 오리올일 오든다 저동믜쭈에서 벤욯닜버난을 늠딤 요아스그셔띠는</p>
            <span>윤동주, '별 헤는 밤' 중...</span>
          </div>
          <div class="meet-image-box">
            <div class="meet-left-image">
              <img src="images/about-image-1.jpeg" alt="">
              <img src="images/about-image-3.jpeg" alt="">
            </div>
            <div class="meet-right-image">
              <img src="images/about-image-2.jpeg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  <!----------------------Features Section  ------------------------>
    <section class="features-section section">
      <div class="container">
        <div class="features-wrapper">
          <div class="features">
            <div class="features-icon">
              <img src="images/about-icon-1.svg" alt="">
            </div>
            <h4>For All Skin Types</h4>
            <p>곤홀룰망다 츨뵤안고 미시의 듄틔는 몬자라효로는 히알덥틱어 건극애어우다 호우듯이 쇽메릐를 라미오 가사녀메다. 당아는 엖기며</p>
          </div>
          <div class="features">
            <div class="features-icon">
              <img src="images/about-icon-2.svg" alt="">
            </div>
            <h4>For All Skin Types</h4>
            <p>곤홀룰망다 츨뵤안고 미시의 듄틔는 몬자라효로는 히알덥틱어 건극애어우다 호우듯이 쇽메릐를 라미오 가사녀메다. 당아는 엖기며</p>
          </div>
          <div class="features">
            <div class="features-icon">
              <img src="images/about-icon-3.svg" alt="">
            </div>
            <h4>For All Skin Types</h4>
            <p>곤홀룰망다 츨뵤안고 미시의 듄틔는 몬자라효로는 히알덥틱어 건극애어우다 호우듯이 쇽메릐를 라미오 가사녀메다. 당아는 엖기며</p>
          </div>
        </div>
        <!-- <div class="features-box">
          <div class="fetures-image fi-1"><img src="../images/about-icon-1.svg" alt="">
            <h3>For All Skin Types</h3>
            <p>곤홀룰망다 츨뵤안고 미시의 듄틔는 몬자라효로는 히알덥틱어 건극애어우다 호우듯이 쇽메릐를 라미오 가사녀메다. 당아는 엖기며</p></div>
          <div class="fetures-image fi-2" ><img src="../images/about-icon-2.svg" alt="">
            <h3>100% Organic</h3>
            <p>곤홀룰망다 츨뵤안고 미시의 듄틔는 몬자라효로는 히알덥틱어 건극애어우다 호우듯이 쇽메릐를 라미오 가사녀메다. 당아는 엖기며</p></div>
          <div class="fetures-image fi-3"><img src="../images/about-icon-3.svg" alt="">
            <h3>Cuelty-Free</h3>
            <p>곤홀룰망다 츨뵤안고 미시의 듄틔는 몬자라효로는 히알덥틱어 건극애어우다 호우듯이 쇽메릐를 라미오 가사녀메다. 당아는 엖기며</p></div>
        </div> -->
      </div>
    </section>

    <!------------------- Slider Section ------------------->
    <section class="slider-section section">
      <div class="container">
        <div class="swiper">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="slider-image">
                <img src="images/slide-image-1.jpeg" alt="">
              </div>
                <div class="slider-text">
                  <h4>천연 재료로부터 만들어진 자연의<br>향기를 만듭니다.</h4>
                  <p>아왼드스내곴더쵤거에 닐완막은 애스를 징라다와 만쿠나잔 안둔녀욋레와 디으힐다 거토앙이는데 록이오오는 자흐는, 둘릐가.</p>
                  <a href="" class="common-btn">Show Now</a>
                </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-image">
                <img src="images/slide-image-2.jpeg" alt="">
              </div>
                <div class="slider-text">
                  <h4>천연 재료로부터 만들어진 자연의<br>향기를 만듭니다.</h4>
                  <p>아왼드스내곴더쵤거에 닐완막은 애스를 징라다와 만쿠나잔 안둔녀욋레와 디으힐다 거토앙이는데 록이오오는 자흐는, 둘릐가.</p>
                  <a href="" class="common-btn">Show Now</a>
                </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-image">
                <img src="images/slide-image-3.jpeg" alt="">
              </div>
                <div class="slider-text">
                  <h4>천연 재료로부터 만들어진 자연의<br>향기를 만듭니다.</h4>
                  <p>아왼드스내곴더쵤거에 닐완막은 애스를 징라다와 만쿠나잔 안둔녀욋레와 디으힐다 거토앙이는데 록이오오는 자흐는, 둘릐가.</p>
                  <a href="" class="common-btn">Show Now</a>
                </div>
            </div>
          </div>
          <!-- end of swiper wrapper -->
          <!-- <div class="swiper-pagination"></div> -->
         
        </div>
          <div class="swiper-button-prev slider-btn"></div>
          <div class="swiper-button-next slider-btn"></div>
          <!-- If we need pagination -->
         <div class="swiper-pagination"></div>
      </div>
    </section>

    <!---------------- Offers Section ----------->
    <section class="offers-section section">
      <div class="container">
        <div class="title-box">
          <h2 class="section-title">Special Offers</h2>
          <a href="#" class="common-btn">전체보기</a>
        </div>

        <div class="products">
          <!-- <div class="product-frame">
            <div class="product-item">
              <img src="images/offers-image-1.jpeg" alt="">
              <div class="product-text">
                <h4>제품 9번</h4>
                <strong>₩30,000원</strong>
                <p>디운은 힙즤로 사룰가는 미마준은, 몬떵는 버머녀 자튄나가도 캄어는 지크첸 여르운긴지요. 낙홰건대 세몬잉기어 즈지엉에 기커자다 허타실, 아의 요룟히노로 오더옥습니다 이앱이다. 사브익얼 볐사워 사비 가실록</p>
                <a href="#" class="common-btn">자세히 보기</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <!------------------- Review Section ------------------->
    <section class="review-section section">
      <div class="container">
        <div class="title-box">
          <h2 class="section-title">Bathing Experiences</h2>
        </div>

        <div class="reviews">
          <div class="review-frame">
            <div class="review-item">
              <p>뒤도므가 뷔앤에서 사으숭 대니까지 꿉롱너 긍릉돈손. 꼰가고 나느셍뢴 교르어 호링헤어서 반란고 저려다 룝력, 중허자도사고, 토객차울길도. 오졔산세츠스오할 탔대로, 허악침므더의 뵌니다 효</p>
              <div class="review-writer">
                <img src="images/review-thumb-1.jpeg" alt="">
                <h4>비누 안쓰는 유저</h4>
                <em>Customer since 2021</em>
              </div>
            </div>
          </div>
          <div class="review-frame">
            <div class="review-item">
              <p>뒤도므가 뷔앤에서 사으숭 대니까지 꿉롱너 긍릉돈손. 꼰가고 나느셍뢴 교르어 호링헤어서 반란고 저려다 룝력, 중허자도사고, 토객차울길도. 오졔산세츠스오할 탔대로, 허악침므더의 뵌니다 효</p>
              <div class="review-writer">
                <img src="images/review-thumb-2.jpeg" alt="">
                <h4>비누 혐오하는 유저</h4>
                <em>Customer since 2021</em>
              </div>
            </div>
          </div>
          <div class="review-frame">
            <div class="review-item">
              <p>뒤도므가 뷔앤에서 사으숭 대니까지 꿉롱너 긍릉돈손. 꼰가고 나느셍뢴 교르어 호링헤어서 반란고 저려다 룝력, 중허자도사고, 토객차울길도. 오졔산세츠스오할 탔대로, 허악침므더의 뵌니다 효</p>
              <div class="review-writer">
                <img src="images/review-thumb-3.jpeg" alt="">
                <h4>빨래비누 쓰는 유저</h4>
                <em>Customer since 2021</em>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section section">
      <div class="container">
        <div class="title-box">
          <h2 class="section-title">the Gallery From Clients</h2>
          <a href="#" class="common-btn">전체보기</a>
        </div>

        <div class="gallery-wrapper">
          <div class="grid">
            <div class="box-sizer"></div>
            <!-- <div class="grid-item"><a href="#"><img src="images/gallery-image-1.jpeg" alt=""></a></div>
            <div class="grid-item"><a href="#"><img src="images/gallery-image-2.jpeg" alt=""></a></div>
            <div class="grid-item"><a href="#"><img src="images/gallery-image-3.jpeg" alt=""></a></div> -->
          </div>
        </div>
      </div>
    </section>

    <section class="insta-section section">
      <div class="container">
        <div class="insta-wrapper">
        <div class="insta-left-image insta-image">
          <div class="insta-grid-2">
            <img src="images/insta-image-1.jpeg" alt="" id="fh">
            <img src="images/insta-image-2.jpeg" alt="" id="h">
          </div>
          <div class="insta-grid-1">
            <img src="images/insta-image-3.jpeg" alt="">
          </div>
        </div>

        <div class="insta-info">
          <h4>Follow Our Instagram for 25% Discount</h4>
          <a href="#"><i class="ri-instagram-fill"></i> marshall</a>
          <a href="#" class="common-btn">25% 할인받기</a>
        </div>

        <div class="insta-right-image insta-image">
          <div class="insta-grid-1">
            <img src="images/insta-image-4.jpeg" alt="">
          </div>
          <div class="insta-grid-2">
            <img src="images/insta-image-5.jpeg" alt="">
            <img src="images/insta-image-6.jpeg" alt="">
          </div>
        </div>
      </div>
      </div>
    </section>
    <!---------------------- Footer Section ------------------------>
    <?php include $_SERVER['DOCUMENT_ROOT']."/common_template/include/footer.php"; ?>
    <!-- <footer>
      <div class="container">
        <div class="footer-upper">
          <div class="footer-logo">
            <a href="#"><img src="images/logo.svg" alt=""></a>
          </div>
          <div class="footer-info">
            <ul class="footer-nav">
              <li><a href="#">ChangeLog</a></li>
              <li><a href="#">Licencing</a></li>
              <li><a href="#">StyleGuide</a></li>
            </ul>
            <ul class="footer-sns">
              <li><a href="#"><img src="images/sns-icon-1.svg" alt=""></a></li>
              <li><a href="#"><img src="images/sns-icon-2.svg" alt=""></a></li>
              <li><a href="#"><img src="images/sns-icon-3.svg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <span class="footer-line"></span>
        <div class="footer-lower">
          <span class="footer-copy">&copy; Copyright 2023</span>
          <span class="byline">Powered by <a href="#">MongProject- Develope By victory</a></span>
        </div>
      </div>
    </footer> -->

    <div class="top-btn">
      <span>TOP</span>
    </div>

    

  </div> 
  <!-- JQuery LINK -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

 <!-- Masonry Plugin Link -->
 <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
 <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

  <!-- Swiper Slider Link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/requestProducts.js"></script>
  <script src="js/requestGallery.js"></script>

  <!---------------- Javascript Link ------------------->
  <script src="JS/userInterface.js"></script>

<script>
  const swiper = new Swiper('.swiper', {
  // Optional parameters
  // direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});
</script>

<!-- <script src="JS/requestProducts.js"></script> -->
</body>
</html>