<?php
/*
Template Name: 制作実績
*/
get_header();
?>
<main class="l-content-expanded page-works" id="page">
  <section class="works-wrapper">
    <h1>制作実績<span class="page-works-en">WORKS</span></h1>
    <div class="works-container grid delayScroll">
      <section class="works-box works-box-small fadeUpTrigger"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_img1.jpg" width="398" height="180" alt=""/>
        <div class="works-box-txt">
          <h2>ECサイト</h2>
          <p class="txt-small">ECサイト専用CMS『EC-CUBE』を使用した、犬猫用栄養補助食品 VEGELTHactive取り扱いのオンラインショップ。こだわりのオリジナルWEBデザインを実現しました。</p>
        </div>
      </section>
      <section class="works-box works-box-large fadeUpTrigger"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works1.jpg" width="398" height="180" alt=""/>
        <div class="works-box-txt">
          <h2>コーポレートサイト</h2>
          <p class="txt-small">お客様のニーズに合ったWEBサイト制作・作成、各レスポンシブ対応。低予算からの制作やリニューアル・カスタマイズのご要望もお受けいたしております。</p>
        </div>
      </section>
      <section class="works-box works-box-small fadeUpTrigger"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_img2.jpg" width="398" height="180" alt=""/>
        <div class="works-box-txt">
          <h2>コーポレートサイト</h2>
          <p class="txt-small">小規模コーポレートサイト。コーポレートロゴデザインからWEBデザイン・コーディング・実装まで作業し且ご希望のコスト内で制作出来ました。</p>
        </div>
      </section>
      <section class="works-box works-box-small fadeUpTrigger"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_img3.jpg" width="398" height="180" alt=""/>
        <div class="works-box-txt">
          <h2>ランディングページ</h2>
          <p class="txt-small">商品単体をPRすることに特化したLPとは違い、ブランド全体としての印象を目立たせ、さらにセールス効果に振り切ることで全体のイメージバランスを保つよう制作が出来ました。</p>
        </div>
      </section>
      <section class="works-box works-box-small fadeUpTrigger"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_img4.jpg" width="398" height="180" alt=""/>
        <div class="works-box-txt">
          <h2>ランディングページ</h2>
          <p class="txt-small">ユーザー様に響くわかりやすいランディングページ。お客様と密に打ち合わせをすることで、よりわかりやすく理解してもらえるように再現出来ました。</p>
        </div>
      </section>
    </div>
  </section>
</main>
<aside class="contact l-content-expanded">
  <div class="l-content-fixed">
    <h2>ご不明な点は<br>
      お気軽にお問い合わせください</h2>
    <p>Webデザイン・制作に関するご相談、お見積もり依頼など<br>
      お気軽にお問い合わせください</p>
    <div class="contact-btns">
      <button type="button" onClick="location.href='/contact/'" class="btn">お問い合わせ</button>
    </div>
  </div>
</aside>	
<?php get_footer(); ?>