<?php
$title = 'Lifeperformance | 業務内容';
$description = '東京 | Web制作会社ライフパフォーマンス | WEBサイト制作事業 | ブランディング事業 | ECサイト販売支援事業 | WEBサイト運用・サポート事業';
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
        <li class="breadcrumb-item">Project</li>
      </ol>
    </nav>
    <!-- Post title + post meta-->
    <h1 class="display-4 text-center pb-2 pb-lg-3">Project</h1>
  </section>
  <!-- Post cover image (parallax)-->
  <div class="jarallax" data-jarallax data-speed=".65">
    <div class="jarallax-img bg-position-center-y" style="background-image: url(assets/img/others/cover2.jpg);"></div>
    <div class="d-none d-xxl-block" style="height: 760px;"></div>
    <div class="d-none d-xl-block d-xxl-none" style="height: 650px;"></div>
    <div class="d-none d-lg-block d-xl-none" style="height: 500px;"></div>
    <div class="d-none d-md-block d-lg-none" style="height: 400px;"></div>
    <div class="d-md-none" style="height: 300px;"></div>
  </div>
  <!-- Concept -->
  <section class="container pt-5 mt-md-2 mt-lg-3 mt-xl-4">
    <div class="col-lg-9 col-xl-8">
      <p>「企業コンセプト・事業コンセプト・商品コンセプト」はまだまだ多岐にわたるかもしれませんが、貴社が掲げるコンセプトを重視し、
        それがデザイン素材の一つとして重要であると考えております。現在、デザイナーの中には独自の価値観を押し出す方々が増えてい
        ますが、私たちはソムリエのような嗅覚を持ち、お客様のコンセプトにふさわしいオリジナルデザインを提供いたします。</p>
      <p>お客様のコンセプトを大切にし、それを具現化するデザインを提供することを心掛けております。柔軟でクリエイティブなアプローチに
        より、貴社の成功に貢献できるよう全力でサポートいたします。どうぞお気軽にお問い合わせください。</p>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
        <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
        <img class="d-block position-relative zindex-2 mx-auto" src="assets/img/project/06.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0">
          <h2 class="h4">WEBサイト制作事業</h2>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">ご希望のWEBサイト完成に向けて、しっかりとお打ち合
            わせさせていただき、デザイン制作からコーディング、実
            装、レスポンシブ対応までワンストップで作業いたします。
            ランディングページ、コーポレートサイト、ECサイト、ブログ
            サイト、その他WEBシステム開発や各種CMS（Word
            Press・ECCUBEなど）にも対応可能です。
            オープンソース？・プラグイン？・ASPカート型？などなど
            のお悩みもお客様のニーズにあったご提案をさせていた
            だきます。</p>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">外部パートナーとしても、スポット作業「デザイン制作の
            み」「コーディング作業のみ」「WEBサイト改修作業のみ」
            など、我々にできることはご協力いたします。
            ご依頼内容に沿って柔軟に対応いたしますので、
            お気軽にお問い合わせください。</p>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
        <div class="bg-primary rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
        <img class="d-block position-relative zindex-2 mx-auto" src="assets/img/project/07.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0">
          <h2 class="h4">ブランディング事業</h2>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">商品開発において、ブランディングは重要なビジネス戦
            略です。そのため、コンセプトに沿った具体的なイメージ
            を作成し、デザイン案としてご提供するお手伝いをいた
            します。主に、ロゴ制作、容器やパッケージデザイン、カ
            タログやチラシなどの広告デザインを請け負っています。 </p>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">また、商品ブランディングの到達点である「自社オリジ
            ナルのブランド商品」を確立するお手伝いも行います。
            しっかりとしたブランディングを通じて、お客様の商品が
            市場で差別化され、競争力を高めるお手伝いをさせ
            ていただきます。 </p>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
        <div class="bg-danger rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
        <img class="d-block position-relative zindex-2 ms-auto" src="assets/img/project/08.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0">
          <h2 class="h4 mb-lg-4">ECサイト販売支援事業</h2>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">弊社では、ブランディングした商品を自社ECサイトに
            出品もしくは、協力会社のECサイトへの販売支援も
            行っております。単に仕事を請け負うだけでなく、販売
            代行までトータルに支援のご相談まで承ります。
            特にスタートアップ企業の新商品など、まだ販売先や
            直接の顧客が確立されていない場合でも、ECモール
            を活用し、販売代行をサポートすることが可能です。
            売れた商品のフィードバックも提供いたします。これに
            より、新商品の開発にもお役立ていただけます。</p>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">ヘアケア商品・化粧品専門モール型オンラインショップ<br>
            LPSTORE<br>
            <a href="https://store.lifeperformance.jp">https://store.lifeperformance.jp/</a></p>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">Amazon/楽天/Yahoo!ショッピング<br>
            ECサイト物品販売<br>
            サクラコーポレーション<br>
            <a href="https://sakuracorporation.co.jp">https://sakuracorporation.co.jp/</a></p>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
        <div class="rounded-5 position-absolute top-0 start-0 w-100 h-100" style="background-color: #edcb50;" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
        <img class="d-block position-relative zindex-2 mx-auto" src="assets/img/project/09.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0">
          <h2 class="h4">WEBサイト運用・サポート事業</h2>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">WEBサイトは完成・公開してからが本番です。Webエンジニアの視点から見た、効果的なSEO対策と集客の仕組みをご提供します。戦略設計からお困りごとを解決し、売上アップのお手伝いをいたします。
            ドメイン取得管理やサーバ管理、SEO対策（検索エンジン対策）・MEO対策（地図検索対策）などを通じて、貴社の情報の順位を上げ、プレゼンスを高めてアピールし、集客・来店につなげるサポート施策を提供しています。</p>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">また、投稿の更新頻度やクチコミへの返信率の向上
            など、ウェブマーケティングをより強化するためのアフタ
            ーサポートも提供いたします。</p>
        </div>
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
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/aos/dist/aos.js"></script> 
<script src="assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js"></script> 
<script src="assets/vendor/img-comparison-slider/dist/index.js"></script> 
<!-- Main theme script--> 
<script src="assets/js/theme.min.js"></script>
</body>
</html>