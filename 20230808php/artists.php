<?php
$title = 'Lifeperformance | イラストレーター&アーティスト';
$description = '東京 | Web制作会社ライフパフォーマンス | インフォメーション | イラストレーター&アーティスト';
include 'inc/head.php'; // head.php の読み込み
?>
<!-- Body-->
<body>

<!-- Page wrapper-->
<main class="page-wrapper">
  <div class="dark-mode"> 
    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
    <?php
    include 'inc/header.php'; // header.php の読み込み
    ?>
  </div>
  <!-- Page content--> 
  <!-- Page header-->
  <section class="container py-5 mt-5 mb-md-2 mb-lg-3 mb-xl-4"> 
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
      <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $path; ?>index.php">Home</a></li>
        <li class="breadcrumb-item">artists</li>
      </ol>
    </nav>
    <!-- Post title + post meta-->
    <h1 class="display-4 text-center pb-2 pb-lg-3">Illustrators & Artists</h1>
  </section>
  <!-- Post cover image (parallax)-->
  <div class="jarallax" data-jarallax data-speed=".65">
    <div class="jarallax-img bg-position-center-y" style="background-image: url(assets/img/others/cover5.jpg);"></div>
    <div class="d-none d-xxl-block" style="height: 760px;"></div>
    <div class="d-none d-xl-block d-xxl-none" style="height: 650px;"></div>
    <div class="d-none d-lg-block d-xl-none" style="height: 500px;"></div>
    <div class="d-none d-md-block d-lg-none" style="height: 400px;"></div>
    <div class="d-md-none" style="height: 300px;"></div>
  </div>
  <!-- アーティスト紹介 -->
  <section class="container pt-5 mt-md-2 mt-lg-3 mt-xl-4">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">アーティスト紹介</h2>
    <div class="row justify-content-center pt-xxl-2">
      <dl class="col-lg-9 col-xl-8">
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">みやもとさぶろう</dt>
        <dd class="fs-lg">キャラクターアーティスト・イラストレーター<br>主に猫のイラストを手がけ、独特なタッチでシュールなアートやアメリカンイラストを制作しています。ユニークな壁紙やWeb素材も多数手がけています。</dd>
        <div class="image-grid-ai">
    <img src="assets/img/artists/subro1.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
    <img src="assets/img/artists/subro2.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
    <img src="assets/img/artists/subro3.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
    <img src="assets/img/artists/subro4.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
    <img src="assets/img/artists/subro5.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
    <img src="assets/img/artists/subro6.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
    <img src="assets/img/artists/subro7.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
    <img src="assets/img/artists/subro8.jpg" alt="アーティストみやもとさぶろう" class="square-image-ai">
  </div>
  <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle me-3" href="https://www.instagram.com/chatoranomesuneko" target="_blank" rel="noopener noreferrer"><i class="ai-instagram"></i></a>
      </dl>
      </div>
  </section>
  <!-- Subscription CTA-->
  <section class="container py-5">
    <div class="bg-dark position-relative rounded-5 overflow-hidden px-4 pt-1 pb-2 py-sm-4 py-lg-5">
      <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .02);"></div>
      <div class="position-absolute top-0 end-0 pe-5 zindex-2">
        <svg class="me-5" width="514" height="254" viewBox="0 0 514 254" fill="white" fill-opacity=".03" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="257" cy="0.5" rx="257" ry="253.5"></ellipse>
        </svg>
      </div>
      <div class="d-none d-lg-flex position-absolute start-0 bottom-0 ms-n4">
        <div data-aos="fade-left" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
          <svg class="text-primary" width="117" height="117" viewBox="0 0 117 117" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="58.5" cy="58.5" r="58.5"></circle>
          </svg>
        </div>
        <div data-aos="fade-right" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
          <svg class="text-warning" width="117" height="117" viewBox="0 0 117 117" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M-2.51516e-06 58.5C-3.52666e-06 70.0702 3.43096 81.3806 9.85902 91.0008C16.2871 100.621 25.4235 108.119 36.113 112.547C46.8025 116.975 58.5649 118.133 69.9128 115.876C81.2607 113.619 91.6844 108.047 99.8657 99.8657C108.047 91.6844 113.619 81.2607 115.876 69.9128C118.133 58.5649 116.975 46.8025 112.547 36.113C108.119 25.4235 100.621 16.2871 91.0009 9.85903C81.3806 3.43096 70.0702 -4.24071e-06 58.5 -5.11423e-06L58.5 58.5L-2.51516e-06 58.5Z"></path>
          </svg>
        </div>
      </div>
      <div class="dark-mode position-relative zindex-3 text-center py-5 my-xl-3 mx-auto" style="max-width: 565px;">
        <h2 class="display-5">Contact</h2>
        <p class="fs-lg pb-3 mb-3 mb-lg-4">ご相談など、お気軽にお問い合わせください。</p>
        <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-sm-inline-flex rounded-0" href="contact.php" rel="noopener"><i class="ai-mail fs-xl me-2 ms-n1"></i>CONTACT</a> </div>
    </div>
  </section>
</main>
<?php
include 'inc/footer.php'; // footer.php の読み込み
?>
<!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
<svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
</svg>
<i class="ai-arrow-up"></i></a> 
<!-- Vendor scripts: js libraries and plugins--> 
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 
<script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script> 
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/aos/dist/aos.js"></script> 
<script src="assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js"></script> 
<script src="assets/vendor/img-comparison-slider/dist/index.js"></script> 
<!-- Main theme script--> 
<script src="assets/js/theme.min.js"></script>
</body>
</html>