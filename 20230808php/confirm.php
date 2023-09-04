<?php
  // フォームのボタンが押されたら
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		// フォームから送信されたデータを各変数に格納
    if(isset($_POST['name'])===TRUE){
                  $name = trim(mb_convert_kana($_POST['name'], 's', 'UTF-8'));
		if(mb_strlen($name)===0){
        $err_msg[] = 'お名前を入力してください';
    } else if (mb_strlen($name) > 10){
         $err_msg[] = 'お名前の文字数が多いです。';
    }
    else {
        $msg[] = '登録完了名前';
    }
              }

    if(isset($_POST['company'])===TRUE){
                $company = trim(mb_convert_kana($_POST['company'], 's', 'UTF-8'));
    if(mb_strlen($company) > 40){
       $err_msg[] = '会社名の文字数が多いです。';
    }
    else {
      $msg[] = '登録完了会社名';
    }
            }

    if(isset($_POST['email'])===TRUE){
              $email = trim(mb_convert_kana($_POST['email'], 's', 'UTF-8'));
    if(mb_strlen($email)===0){
      $err_msg[] = 'メールアドレスを入力してください';
    } else if (preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',$email)!==1){
      $err_msg[] = 'メールアドレスの形式が正しくありません';
    }
    else {
      $msg[] = '登録完了MAIL';
    }
           }

	if(isset($_POST['phone'])===TRUE){
                  $phone = trim(mb_convert_kana($_POST['phone'], 's', 'UTF-8'));
		if(mb_strlen($phone)===0){
        $err_msg[] = '電話番号を入力してください';
    } else if (preg_match('/\A[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}\z/',$phone)!==1){
         $err_msg[] = '電話番号の形式が正しくありません（ハイフンを入れておりませんか？）';
    }
    else {
        $msg[] = '登録完了TEL';
    }
              }
    if(isset($_POST['message'])===TRUE){
                $message = trim(mb_convert_kana($_POST['message'], 's', 'UTF-8'));
    if(mb_strlen($message)===0){
      $err_msg[] = 'お問い合わせ内容を入力してください';
    } else if (mb_strlen($message) > 300){
       $err_msg[] = 'お問い合わせ内容は300文字以内です';
    }
    else {
      $msg[] = '登録完了メッセージ';
    }
  }
    if(isset($_POST['check']) && is_array($_POST['check'])) {
      $check = $_POST['check'];

    if(empty($check)) {
        $err_msg[] = '項目を選択してください';
    } else {
        $msg[] = '登録完了選択';
    }
} else {
    $err_msg[] = 'チェックボックスのデータが正しく送信されていません';
}
	}

	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する
        	
		// 日本語をメールで送る場合のおまじない
        	mb_language("ja");
		mb_internal_encoding("UTF-8");
		
		//mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");
// $check配列の要素をカンマで結合して文字列を生成
$checks = implode(", ", $check);
        	// 件名を変数subjectに格納 送信者
        	$subject = "［自動送信］お問い合わせ内容の確認";

        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name} 様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name}

【 会社名 】 
{$company}

【 メール 】 
{$email}

【 電話番号 】 
{$phone}

【 お問い合わせ内容 】 
{$message}

【 お問い合わせ項目 】 
{$checks}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。

株式会社ライフパフォーマンス
〒160-0023
東京都新宿区西新宿3-2-9 新宿ワシントンホテルビル本館2F

EOM;
        
		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "info@lifeperformance.jp";

		// 送信元の名前を変数fromNameに格納
		$fromName = "お問い合わせ";

		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

		// メール送信を行う
		mb_send_mail($email, $subject, $body, $header);

   	// 件名を変数subjectに格納　管理者
        	$subject = "［自動送信］お問い合わせがありました。";

        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name} 様より問い合わせがありました。

以下のお問い合わせ内容を、確認ください。

===================================================
【 お名前 】 
{$name}

【 会社名 】 
{$company}

【 メール 】 
{$email}

【 電話番号 】 
{$phone}

【 お問い合わせ内容 】 
{$message}

【 お問い合わせ項目 】 
{$checks}
===================================================


EOM;
        
		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "info@lifeperformance.jp";

		// 送信元の名前を変数fromNameに格納
		$fromName = "お問い合わせ";

		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

		// メール送信を行う
		mb_send_mail($fromEmail, $subject, $body, $header);
 		// サンクスページに画面遷移させる
		header("Location: https://lifeperformance.jp/thanks.php");
		exit;
	}
?>
<?php
$title = 'Lifeperformance | お問い合わせ';
$description = '東京 | Web制作会社ライフパフォーマンス | お気軽にお問い合わせください。';
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
        <li class="breadcrumb-item">Confirm</li>
      </ol>
    </nav>
    <!-- Post title + post meta-->
    <h1 class="display-4 text-center pb-2 pb-lg-3">Contact</h1>
  </section>
  <!-- Post cover image (parallax)-->
  <div class="jarallax" data-jarallax data-speed=".65">
    <div class="jarallax-img bg-position-center-y" style="background-image: url(assets/img/others/cover4.jpg);"></div>
    <div class="d-none d-xxl-block" style="height: 760px;"></div>
    <div class="d-none d-xl-block d-xxl-none" style="height: 650px;"></div>
    <div class="d-none d-lg-block d-xl-none" style="height: 500px;"></div>
    <div class="d-none d-md-block d-lg-none" style="height: 400px;"></div>
    <div class="d-md-none" style="height: 300px;"></div>
  </div>
  <!-- Contact form-->
  <section class="container dark-mode py-5 mb-md-2 mb-lg-3 mb-xl-4" style="margin-top: -260px;">
    <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5"> 
      <!-- Decorative shapes-->
      <svg class="position-absolute end-0 mt-n2" width="242" height="331" viewBox="0 0 242 331" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M172.014 250.127C137.236 227.74 112.349 192.144 144.586 153.591C157.686 137.932 176.759 127.973 196.524 122.046C234.647 110.639 277.027 113.361 313.349 129.576C338.19 140.666 361.129 159.183 369.934 184.502C383.476 223.496 359.75 260.161 321.569 273.118C288.832 284.223 247.685 279.513 214.885 269.837C201.003 265.743 185.745 258.966 172.014 250.127Z" fill="#121519" fill-opacity=".07"></path>
        <path d="M20.3265 69.264C19.7064 43.0736 29.8071 17.1878 62.3851 19.8622C75.6229 20.9505 87.9525 27.2066 98.3563 35.3132C118.426 50.9253 132.424 73.896 136.952 98.6413C140.044 115.562 138.424 134.218 127.978 148C111.901 169.236 83.4531 170.283 62.5246 155.209C44.5807 142.281 32.0983 119.217 25.3391 98.6799C22.4836 89.9885 20.5616 79.6021 20.3265 69.264Z" fill="#121519" fill-opacity=".07"></path>
      </svg>
      <svg class="position-absolute start-0 bottom-0 ms-3" width="169" height="217" viewBox="0 0 169 217" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M34.2574 90.0177C29.666 97.6253 26.6254 106.591 24.9502 114.96C19.9522 140.043 26.4112 168.792 49.6162 181.885C66.0705 191.17 91.0017 189.904 108.062 183.692C125.725 177.266 135.045 168.04 142.29 150.389C151.409 128.174 150.912 99.6904 125.93 91.6429C115.423 88.254 104.723 86.5065 94.2249 82.5889C84.6622 79.0248 74.8545 72.1766 64.4411 71.6149C50.8011 70.8777 40.9122 79.0146 34.2574 90.0177Z" fill="#121519" fill-opacity="0.07"></path>
        <path d="M147.005 75.6331C152.135 70.7783 156.106 64.2374 159.153 57.9073C166.014 43.6372 174.127 22.1368 160.207 9.68505C152.924 3.17188 139.243 3.86644 130.324 5.29774C118.428 7.20428 107.295 8.85077 96.5031 14.783C85.8056 20.6599 79.0155 33.6997 77.0014 45.6686C75.4978 54.5776 79.63 63.6672 84.7391 70.7453C91.8208 80.5571 103.503 84.2003 114.817 84.3975C121.101 84.5081 127.716 84.0527 133.89 82.8121C138.932 81.7962 143.273 79.1597 147.005 75.6331Z" fill="#121519" fill-opacity="0.07"></path>
      </svg>
      <div class="card-body position-relative zindex-2 py-5">
        <form class="mx-auto" action="confirm.php" method="post" name="form" onsubmit="return validate()" style="max-width: 800px;">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="company" value="<?php echo $company; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">
            <?php $checks = implode(", ", $check); ?>
            <input type="hidden" name="check[]" value="<?php echo $checks; ?>">
          <h2 class="h1 card-title text-center pb-4">お問い合わせ 内容確認</h2>
          <p class="section-description">お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
          <div class="row g-4">
            <div class="col-sm-6">
              <label class="form-label fs-base" for="name">Name</label>
              <p><?php print htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="col-sm-6">
              <label class="form-label fs-base" for="company">Company</label>
              <p><?php print htmlspecialchars($company, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="col-sm-6">
              <label class="form-label fs-base" for="email">Email</label>
              <p><?php print htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="col-sm-6">
              <label class="form-label fs-base" for="phone">Phone</label>
              <p><?php print htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="col-sm-12">
              <label class="form-label fs-base" for="message">How can we help?</label>
              <p><?php print htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="col-sm-12">
              <label class="form-label fs-base" for="check"></label>
              <?php
              if (isset($check) && is_array($check) && count($check) > 0) {
                echo '<ul>';
              foreach ($check as $checks) {
                echo '<li>' . htmlspecialchars($checks, ENT_QUOTES, 'UTF-8') . '</li>';
              }
              echo '</ul>';
              }
             ?>
           </div>
           <div class="col-sm-12">
              <label class="form-label fs-base" for="check"></label>
              <?php
              if (isset($err_msg) && is_array($err_msg) && count($err_msg) > 0) {
                echo '<ul>';
              foreach ($err_msg as $err_msgs) {
                echo '<li>' . htmlspecialchars($err_msgs, ENT_QUOTES, 'UTF-8') . '</li>';
              }
              echo '</ul>';
              }
             ?>
           </div>
            <div class="col-sm-12 text-center pt-4">
              <input type="button" value="内容を修正する" onclick="history.back(-1)" class="btn btn-lg btn-light btn-bottom">
              <?php if(empty($err_msg)){ ?>
                <?php echo '<button type="submit" name="submit" class="btn btn-lg btn-light" type="submit">送信する</button>'; ?>
            </div> <?php } ?>
          </div>
        </form>
      </div>
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