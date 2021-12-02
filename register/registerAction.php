<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dply.app - 사전 예약 </title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default/default.css">
  <link rel="shortcut icon" href="/static/image/favicon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="/static/css/bootstrap.css">
  <link rel="stylesheet" href="/static/fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="/static/fonts/typography-font/typo.css">
  <link rel="stylesheet" href="/static/fonts/fontawesome-5/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="/static/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="/static/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/static/plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="/static/plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="/static/css/main.css">
  <!-- Custom stylesheet -->
  <style>
    * {font-family: 'Noto Sans KR', sans-serif;}
  </style>
</head>
<body>
  <?php
    $tag = urlencode($_POST['tag']);
    $succMsg = 'Your request have submitted successfully.';
    //echo $succMsg;
    echo '<form action="https://stibee.com/api/v1.0/lists/eZJhb3ih1rJwsF6zBrFhcmVCDSNqkg==/public/subscribers" method="POST" accept-charset="utf-8" class="stb_form" name="stb_subscribe_form" id="stb_subscribe_form">';
      echo '<input type="hidden" name="name" id="name" value="'.$_POST['name'].'">';
      echo '<input type="hidden" name="nickname" id="nickname" value="'.$_POST['nickname'].'">';
      echo '<input type="hidden" name="email" id="email" value="'.$_POST['email'].'">';
      echo '<input type="hidden" name="tag" id="tag" value="'.$tag.'">';
      echo '<input type="hidden" name="birth" id="birth" value="'.$_POST['birth'].'">';
      echo '<input type="hidden" name="phone" id="phone" value="'.$_POST['phone'].'">';
    echo '</form>';
    echo '<script type="text/javascript" src="https://s3.ap-northeast-2.amazonaws.com/resource.stibee.com/subscribe/stb_subscribe_form.js"></script>';
    //echo "<script>window.addEventListener('load', () => {document.body.querySelector('#stb_subscribe_form').submit();});</script>";
    echo "<script>window.addEventListener('load', STBSUBFORM.formRequest);</script>";
  ?>

  <div class="site-wrapper overflow-hidden position-relative">
    <!-- 404 page Area -->
    <div class="error-page" style="padding-top: 50px;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
            <div class="error-page-content text-center">
              <img class="w-100" src="/static/image/preloader.gif" alt="image">
              <h2 style="font-size: 45px;">사전 예약</h2>
              <p><div id="stb_form_result"></div></p>
              <div class="back-to-btn">
                <a href="/"><button class="btn focus-reset">OK</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor Scripts -->
  <script src="/static/js/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="/static/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="/static/plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="/static/plugins/aos/aos.min.js"></script>
  <script src="/static/plugins/slick/slick.min.js"></script>
  <script src="https://porjoton.netlify.app/mekanic/js/waypoints.min.js"></script>
  <script src="/static/plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="/static/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="/static/plugins/isotope/packery.pkgd.min.js"></script>
  <script src="/static/plugins/isotope/image.loaded.js"></script>
  <script src="/static/plugins/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="/static/js/custom.js"></script>
  

  <!--
  
  이름: <?php echo $_POST['name']; ?><br /><br/>

  닉네임: <?php echo $_POST['nickname']; ?><br /><br/>

  이메일: <?php echo $_POST['email']; ?><br /><br/>

  태그: <?php echo $_POST['tag']; ?><br /><br/>

  태그(ESCAPE): <?php echo $tag ?>

  생년월일: <?php echo $_POST['birth']; ?><br /><br/>

  휴대전화 번호: <?php echo $_POST['phone']; ?><br /><br/>
  
  -->
</body>
</html>