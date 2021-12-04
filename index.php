<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Skyle - 사전 예약 </title>
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
  <!-- Plugin'stylesheets  -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default/default.css">
  <link rel="stylesheet" href="/static/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="/static/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/static/plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="/static/plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="/static/css/main.css">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="/static/css/fonts.css">
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  <div class="site-wrapper overflow-hidden position-relative">
    <?php
      require('register/register.php');
    ?>
</div>
<!-- Vendor Scripts -->
<script src="/static/js/vendor.min.js"></script>
<!-- Plugin's Scripts -->
<link rel="stylesheet" href="/static/plugins/jquery-ui/jquery-ui.css">
<script src="/static/plugins/jquery-ui/jquery-ui.js"></script>
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
<script src="/static/js/scripts.js"></script>
<script src='https://www.hCaptcha.com/1/api.js' async defer></script>
<script>$("#birth").datepicker({ dateFormat: 'yy/mm/dd' });</script>
</body>

</html>