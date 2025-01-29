
<?php
$title = 'Lifeperformance | Top Page';
$description = '東京 | Web制作会社ライフパフォーマンスはデザイン設計からWEBサイト開発やCMS構築までワンストップで対応';
$is_home = true; //トップページの判定用の変数
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
  <!-- Hero-->
  <section class="bg-dark dark-mode position-relative min-vh-100 overflow-hidden pt-5">
    <div class="container position-relative zindex-5 text-center pt-5 mt-lg-4 mt-xl-5">
      <h1 class="display-1 pt-4 mt-sm-3"><span class="text-white fw-normal">Design For Better Performance</span></h1>
      <p class="fs-xl mb-5">パフォーマンス向上を目指したデザイン設計</p>
      <a class="scroll-down-btn" href="#landings" data-scroll data-scroll-offset="20">
      <div class="mouse"></div>
      <p>Landings</p>
      </a> </div>
    <div class="d-none d-lg-block" style="margin-top: -80px;"></div>
    <div class="d-none d-sm-block d-lg-none" style="margin-top: -40px;"></div>
    <div class="parallax mx-auto mb-n5" style="max-width: 1606px;">
      <div class="parallax-layer" data-depth="-0.1"><img src="assets/img/top/01.png" alt="Background shapes"></div>
      <div class="parallax-layer zindex-2" data-depth="0.12"><img src="assets/img/top/02.png" alt="Foreground shape"></div>
      <div class="parallax-layer zindex-2" data-depth="0.35"><img src="assets/img/top/03.png" alt="Foreground shape"></div>
      <div class="parallax-layer zindex-2" data-depth="0.23"><img src="assets/img/top/04.png" alt="Foreground shape"></div>
    </div>
  </section>
  <!-- About -->
  <section class="overflow-hidden pt-2 pt-sm-3 pt-md-4 pt-lg-3 pb-1">
    <div class="container position-relative py-5 my-lg-3 my-xl-4 my-xxl-5">
      <div class="position-absolute" style="margin-left: -12.7%;" data-aos="zoom-in" data-aos-duration="500" data-aos-offset="300" data-disable-parallax-down="lg">
        <svg class="text-warning d-none d-lg-block" width="744" height="744" viewBox="0 0 744 744" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <circle cx="372" cy="372" r="372"></circle>
        </svg>
      </div>
      <div class="d-none d-xxl-block" style="height: 190px;"></div>
      <div class="d-none d-lg-block d-xxl-none" style="height: 150px;"></div>
      <div class="row justify-content-center justify-content-lg-start position-relative zindex-2">
        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4 text-center text-lg-start" data-aos="fade-up" data-aos-duration="850" data-aos-offset="120" data-disable-parallax-down="lg">
          <div class="ignore-dark-mode d-none d-lg-block">
            <h2 class="display-5 mb-4">デザイン設計からWEBサイト開発やCMS構築までワンストップで対応</h2>
            <p class="fs-lg text-dark pb-3 pb-sm-4 mb-lg-0">株式会社ライフパフォーマンスでは、商品企画から販路構築までビジネスの成長を支援するクリエイティブパートナーとして、お客様の課題解決にフォーカスしたデザインやWebソリューションを一貫して自社内で提供しています。</p>
          </div>
          <div class="d-lg-none">
            <h2 class="display-5 mb-4">デザイン設計からWEBサイト開発やCMS構築までワンストップで対応</h2>
            <p class="fs-lg text-dark pb-3 pb-sm-4 mb-lg-0">株式会社ライフパフォーマンスでは、商品企画から販路構築までビジネスの成長を支援するクリエイティブパートナーとして、お客様の課題解決にフォーカスしたデザインやWebソリューションを一貫して自社内で提供しています。</p>
          </div>
        </div>
      </div>
      <div class="d-none d-xl-block" style="margin-top: -240px;"></div>
      <div class="d-none d-lg-block d-xl-none" style="margin-top: -160px;"></div>
      <div class="d-flex position-relative zindex-2 mb-3">
        <div class="flex-xxl-shrink-0 position-relative zindex-2" style="max-width: 500px; margin-top: 27%; margin-right: -2%;" data-aos="fade-up" data-aos-duration="480" data-aos-delay="400" data-disable-parallax-down="lg"><img class="rounded-3 mt-n5 mt-lg-0 d-block d-dark-mode-none" src="assets/img/top/01-light.jpg" alt="Page" style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"></div>
        <div class="flex-xxl-shrink-0 position-relative zindex-1" style="max-width: 500px; margin-top: 18%; margin-right: -2%;" data-aos="fade-up" data-aos-duration="480" data-aos-delay="200" data-disable-parallax-down="lg"><img class="rounded-3 mt-n5 mt-lg-0 d-block d-dark-mode-none" src="assets/img/top/02-light.jpg" alt="Page" style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"></div>
        <div class="flex-xxl-shrink-0" style="max-width: 500px;" data-aos="fade-up" data-aos-duration="450" data-aos-offset="250" data-disable-parallax-down="lg"><img class="rounded-3 d-block d-dark-mode-none" src="assets/img/top/03-light.jpg" alt="Page" style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"></div>
      </div>
    </div>
  </section>
  <!-- Project -->
  <div class="background_gradient">
  <section class="container mt-2 mt-md-0">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">Project</h2>
    <p class="fs-lg mb-0 mb-lg-4 h4">事業内容</p>
    <!-- WEBサイトデザイン・制作 -->
    <div class="row align-items-center py-4 mt-2 mt-sm-3 mt-md-4 mb-2 mb-md-3 mb-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
      <div class="col-md-6 col-lg-7 order-md-2 d-flex justify-content-end mb-4"><img class="d-dark-mode-none" src="assets/img/top/design.png" width="593" alt="Colors"></div>
      <div class="col-md-6 col-lg-5 order-md-1 mt-md-n5" data-aos="fade-up" data-aos-duration="850" data-aos-offset="200" data-disable-parallax-down="md"><span class="badge fs-sm bg-faded-primary text-primary mb-4">WEBサイトデザイン・制作</span>
        <p class="fs-lg mb-0 mb-lg-4 h4">見せるだけではなく、目的に沿ったWEBサイト制作をご提供します。</p>
        <p class="fs-lg mb-0 mb-lg-4">お客様のニーズに合わせたサービスを柔軟にご提供いたします。コーディング代行も承りますので、デザインやアイデアを形にするお手伝いをいたします。<br>また、Webデザインのみのご依頼にも対応可能です。ビジュアルコンセプトからのご提案もお任せください。</p>
      </div>
    </div>
    <!-- 商品ブランディング -->
    <div class="row align-items-center py-4 my-2 my-md-3 my-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
      <div class="col-md-6 col-lg-7 mb-4"><img class="d-dark-mode-none" src="assets/img/top/project.png" width="636" alt="Typography"></div>
      <div class="col-md-6 col-lg-5 mt-md-n4" data-aos="fade-up" data-aos-duration="850" data-aos-offset="200" data-disable-parallax-down="md"><span class="badge fs-sm bg-faded-info text-info mb-4">グラフィックデザイン・印刷</span>
        <p class="fs-lg mb-0 mb-lg-4 h4">グラフィックデザインと印刷物制作を通じて、ブランドイメージ向上のお手伝いをいたします。</p>
        <p class="fs-lg mb-0 mb-lg-4">パッケージやラベルの印刷物制作もサポートし、ブランドの魅力を最大限に引き出します。<br>また、グラフィックデザインのみのご依頼も承ります。デザインから印刷まで、お客様のニーズに合わせたご提案をいたします。</p>
      </div>
    </div>
    <!-- ECサイト事業 -->
    <div class="row align-items-center py-4 my-2 my-md-3 my-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
      <div class="col-md-6 col-lg-7 order-md-2 d-flex justify-content-end pb-2 pb-md-0 mb-4 mb-md-0"><img class="d-dark-mode-none" src="assets/img/top/ec.png" width="636" alt="Borders"></div>
      <div class="col-md-6 col-lg-5 order-md-1" data-aos="fade-up" data-aos-duration="850" data-aos-offset="200" data-disable-parallax-down="md"><span class="badge fs-sm bg-faded-danger text-danger mb-4">ECサイト販売支援事業</span>
        <p class="fs-lg mb-0 mb-lg-4 h4">自社ECサイト「LPSTORE」およびその他ECサイトへの販売支援を行います。</p>
      </div>
    </div>
    <!-- WEBサイト運用・集客 -->
    <div class="row align-items-center py-4 my-2 my-md-3 my-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
      <div class="col-md-6 col-lg-7 mb-4"><img class="d-dark-mode-none" src="assets/img/top/seo.png" width="636" alt="Typography"></div>
      <div class="col-md-6 col-lg-5 mt-md-n4" data-aos="fade-up" data-aos-duration="850" data-aos-offset="200" data-disable-parallax-down="md"><span class="badge fs-sm bg-faded-info text-info mb-4">WEBサイト運用・集客</span>
        <p class="fs-lg mb-0 mb-lg-4 h4">【Web開発】だけで終わらない、運用・集客・アフターサポートもお任せください。</p>
      </div>
    </div>
    <div class="project_bottom"><a class="d-inline-flex align-items-center fw-semibold text-decoration-none" href="project.php">詳しくはこちら<i class="ai-arrow-right fs-4 ms-2"></i></a></div>
  </section>
</div>
  <!-- Benefits -->
  <section class="container mt-2 mt-md-0">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">Benefits of Our Four Business Areas</h2>
    <p class="fs-lg mb-0 mb-lg-4 h4">4つの事業内容がもたらすメリット</p>
     <!-- お困りではありませんか？ -->
      <div class="row align-items-center py-4 mt-2 mt-sm-3 mt-md-4 mb-2 mb-md-3 mb-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
      <div class="col-md-6 col-lg-7 order-md-2 d-flex justify-content-end mb-4"><img class="img-radius d-dark-mode-none" src="assets/img/top/merit1.gif" width="593" alt="Colors"></div>
      <div class="col-md-6 col-lg-5 order-md-1 mt-md-n5" data-aos="fade-up" data-aos-duration="850" data-aos-offset="200" data-disable-parallax-down="md"><span class="badge fs-sm bg-faded-danger text-danger mb-4 mobile-center">現在利用している業者にお困りではありませんか？</span>
      <ul class="fs-lg text-dark pb-3 pb-sm-4 mb-lg-0">
        <li>顧客対応や営業活動に特化しており、デザイナーやエンジニアの業務はすべて外部委託しているため、高価な取引となっている。<br>又はECサイトやトピックスページなどの新商品公開がリアルタイムに更新できない。</li>
          <li>印刷業がメインで、WEB関係はすべて外部委託している。</li>
          <li>WEBサイトはノーコードプラットフォームを契約させられており、ページの追加や更新作業は自分で対応しなければならない。</li>
          <li>デザイナーはいるが、コーダーがいないため反映は外注となり時間がかかる。</li>
        </ul>
      </div>
    </div>
    <!-- WEB媒体と紙媒体に展開します。 -->
    <div class="row align-items-center py-4 my-2 my-md-3 my-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
      <div class="col-md-6 col-lg-7 mb-4"><img class="img-radius d-dark-mode-none" src="assets/img/top/merit2.gif" width="636" alt="Typography"></div>
      <div class="col-md-6 col-lg-5 mt-md-n4" data-aos="fade-up" data-aos-duration="850" data-aos-offset="200" data-disable-parallax-down="md"><span class="badge fs-sm bg-faded-info text-info mb-4 mobile-center">デザインをWEBと紙媒体に展開します。</span>
        <p class="fs-lg text-dark pb-3 pb-sm-4 mb-lg-0">
          WEBサイト制作はA社、デザイン制作はB社、チラシ・パンフレットはC社、容器や箱などの部材はD社と、それぞれ異なる業者に依頼し、同じ内容の手配やデータ作成に時間を割いていませんか？ <br>それは無駄ではありませんか？<br>ライフパフォーマンスでは、一つのデザイン制作で、すべての制作が可能です。これにより、手間や時間を大幅に削減できます。
      </p>
      </div>
    </div>
    <p class="fs-lg mb-0 mb-lg-4 h4">
      <span class="marker">ライフパフォーマンスでは、デザインやコーディングといった専門的な技術職をメインに活動しているため、直接的なご要望にお応えできます。</span>
  </p>
    </section>
  <!-- Works -->
  <section class="container mt-2 mt-md-0 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">Works</h2>
    <div class="row mt-sm-2 mt-lg-0 pt-4 pt-lg-5 pb-md-4">
      <div class="col-md-7 pb-2 pb-md-0 mb-4 mb-md-0">
        <div class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4"><img class="rounded-5" src="assets/img/top/01.jpg" alt="Image"></div>
        <div class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4"><img class="rounded-5" src="assets/img/top/02.jpg" alt="Image"></div>
        <div class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4"><img class="rounded-5" src="assets/img/top/03.jpg" alt="Image"></div>
      </div>
      <!-- Sidebar -->
      <div class="col-md-5 col-xl-4 offset-xl-1" style="margin-top: -115px;">
        <div class="position-sticky top-0 ps-md-4 ps-xl-0" style="padding-top: 125px;">
          <h3 class="h4">ウェブサイトには見た目を良くする以外にもユーザビリティという大切な役割がありオンラインビジネスの成功に不可欠な要素となっています。</h3>
          <p>弊社の実績ではウェブサイト制作や商品ブランディング・販売支援・運営・保守まで幅広く対応させていただいております。</p>
          <a class="d-inline-flex align-items-center fw-semibold text-decoration-none" href="works.php">詳しくはこちら<i class="ai-arrow-right fs-4 ms-2"></i></a> </div>
      </div>
    </div>
  </section>
  <!-- News -->
  <section class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">
    <h2 class="display-5 text-left pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">News</h2>
    <!-- Post-->
    <div class="col-sm-7 col-lg-8">
      <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
        <h3><a href="https://www.xserver.ne.jp/">XSERVER ビジネスパートナープログラムに参加いたしました。</a></h3>
        <div class="d-flex flex-wrap align-items-center mt-n2"><span class="fs-sm text-muted mt-2">2025.1.10</span></div>
      </div>
    </div>
    <!-- Post-->
    <div class="col-sm-7 col-lg-8">
      <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
        <h3><a href="https://homepage-seisaku.biz/introduce/lifeperformance/">株式会社シーズ・クリエイトが運営する<br>「ホームページ制作会社データベース」<br>に掲載いただきました。</a></h3>
        <div class="d-flex flex-wrap align-items-center mt-n2"><span class="fs-sm text-muted mt-2">2024.7.26</span></div>
      </div>
    </div>
    <!-- Post-->
    <div class="col-sm-7 col-lg-8">
      <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
        <h3><a href="https://lifeperformance.jp/works.php">制作実績を更新いたしました。</a></h3>
        <div class="d-flex flex-wrap align-items-center mt-n2"><span class="fs-sm text-muted mt-2">2024.3.10</span></div>
      </div>
    </div>
    <!-- Post-->
    <div class="col-sm-7 col-lg-8">
      <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
        <h3><a href="https://www.shopify.com/jp/partners">Shopify パートナープログラムに参加いたしました。</a></h3>
        <div class="d-flex flex-wrap align-items-center mt-n2"><span class="fs-sm text-muted mt-2">2024.2.21</span></div>
      </div>
    </div>
    <!-- Post-->
    <div class="col-sm-7 col-lg-8">
      <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
        <h3><a href="https://youtu.be/mKWVP0AyZuw">funkojisanチャネルに出演させていただきました。</a></h3>
        <div class="d-flex flex-wrap align-items-center mt-n2"><span class="fs-sm text-muted mt-2">2023.8.4</span></div>
      </div>
    </div>
    <!-- Post-->
    <div class="col-sm-7 col-lg-8">
      <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
        <h3><a href="https://www.makeshop.jp/">GMO MakeShopのパートナーとなりました。</a></h3>
        <div class="d-flex flex-wrap align-items-center mt-n2"><span class="fs-sm text-muted mt-2">2023.2.8</span></div>
      </div>
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
<script src="assets/vendor/parallax-js/dist/parallax.min.js"></script> 
<script src="assets/vendor/aos/dist/aos.js"></script> 
<script src="assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js"></script> 
<script src="assets/vendor/img-comparison-slider/dist/index.js"></script> 
<!-- Main theme script--> 
<script src="assets/js/theme.min.js"></script>
</body>
</html>