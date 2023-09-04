<?php
$title = 'Lifeperformance | 会社概要';
$description = '東京 | Web制作会社ライフパフォーマンス | インフォメーション | 実績スキル記載';
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
        <li class="breadcrumb-item">About</li>
      </ol>
    </nav>
    <!-- Post title + post meta-->
    <h1 class="display-4 text-center pb-2 pb-lg-3">About</h1>
  </section>
  <!-- Post cover image (parallax)-->
  <div class="jarallax" data-jarallax data-speed=".65">
    <div class="jarallax-img bg-position-center-y" style="background-image: url(assets/img/others/cover.jpg);"></div>
    <div class="d-none d-xxl-block" style="height: 760px;"></div>
    <div class="d-none d-xl-block d-xxl-none" style="height: 650px;"></div>
    <div class="d-none d-lg-block d-xl-none" style="height: 500px;"></div>
    <div class="d-none d-md-block d-lg-none" style="height: 400px;"></div>
    <div class="d-md-none" style="height: 300px;"></div>
  </div>
  <!-- Concept -->
  <section class="container pt-5 mt-md-2 mt-lg-3 mt-xl-4">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">Concept</h2>
    <div class="row justify-content-center pt-xxl-2">
      <div class="col-lg-9 col-xl-8">
        <p class="fs-lg">"Design For Better Performance"は、WEBデザインとパフォーマンスの融合に重点を置いたコンセプトです。このコンセプトでは、以下のポイントに焦点を当てて活かしていきたいと考えております。</p>
        <p class="fs-lg mb-3"><span class="text_bold">最適なユーザーエクスペリエンス: </span>訪れる方々のニーズに応じたデザインを提供し、素晴らしいユーザー体験を実現します。清潔で直感的なインターフェース、スムーズなナビゲーション、そして迅速な読み込み時間を通じて、ユーザーがウェブサイトを気軽に利用できる環境を提供します。</p>
        <p class="fs-lg mb-3"><span class="text_bold">パフォーマンスと速度: </span>最新の技術や最適化手法を活用して、ページの読み込み時間を最小限に抑えます。これにより快適なユーザー体験を保証するとともに、SEOにも良い影響を与え、検索エンジンの順位向上に貢献します。</p>
        <p class="fs-lg mb-3"><span class="text_bold">レスポンシブデザイン: </span>現代のウェブユーザーはさまざまなデバイスを使用してコンテンツにアクセスします。私たちのデザインは、デスクトップからモバイルまで、異なる画面サイズや解像度に柔軟に対応できるよう工夫されています。</p>
        <p class="fs-lg mb-3"><span class="text_bold">セキュリティと安定性: </span>ウェブサイトのセキュリティと安定性を強化し、ユーザーのプライバシーと信頼性を確保します。セキュリティ上の懸念はユーザーを離れさせる可能性があるため、信頼性の高いWEBサイト構築を念頭に置いてご提供いたします。</p>
        <p class="fs-lg mb-3">このコンセプトのもとで、我々はデザインとパフォーマンスのバランスを取りながら、より優れたウェブサイトを創造し、ユーザー
          にとって価値あるオンライン体験をご提供いたします。</p>
      </div>
    </div>
  </section>
  <!-- Information -->
  <section class="container pt-5 mt-md-2 mt-lg-3 mt-xl-4">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">Information</h2>
    <div class="row justify-content-center pt-xxl-2">
      <dl class="col-lg-9 col-xl-8">
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">社名</dt>
        <dd class="fs-lg">株式会社ライフパフォーマンス</dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">代表</dt>
        <dd class="fs-lg">松本　昌己</dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">所在地</dt>
        <dd class="fs-lg">〒160-0023 東京都新宿区西新宿3-2-9　新宿ワシントンホテルビル本館2F</dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">アドレス</dt>
        <dd class="fs-lg">info@lifeperformance.jp</dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">電話番号</dt>
        <dd class="fs-lg">03-5324-2733</dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">会員</dt>
        <dd class="fs-lg">フリーランス協会</dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">パートナー</dt>
        <dd class="fs-lg">GMO MakeShop  IT導入補助金支援事業者</dd>
      </dl>
    </div>
  </section>
  <!-- Service -->
  <section class="container pt-5 mt-md-2 mt-lg-3 mt-xl-4">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">Service</h2>
    <div class="row justify-content-center pt-xxl-2">
      <dl class="col-lg-9 col-xl-8">
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">Web関連</dt>
        <dd class="fs-lg">Webサイト制作・開発・運用・保守 / LP制作 / CMS構築・カスタマイズ / 情報設計・ワイヤーフレーム 制作 </dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">印刷関連</dt>
        <dd class="fs-lg">印刷物デザイン・設計/印刷物製作（協力印刷会社：地元活性化プロジェクトにより北海道企業様に委託）</dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">開発スキル</dt>
        <dd class="fs-lg">フロントエンド<br>
          HTML / CSS・Sass
          JavaScript - jQuery・Vue.js・React.js<br>
          バックエンド<br>
          PHP - Laravel・cakePHP・symfony（要相談）<br>
          データベース<br>
          MySQL / SQLite<br>
          CMS<br>
          WordPress / ECCUBE </dd>
        <dt class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">開発環境</dt>
        <dd class="fs-lg">デザイン<br>
          illustrator / Photoshop / XD / Premiere Pro / After Effect<br>
          エディタ<br>
          Visual Studio Code / Vim / Dreamweaver / cloud９<br>
          バージョン管理<br>
          Git / github</dd>
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