<?php get_header(); ?>

<main>
  <section id="mv" class="l-content-expanded">
    <div class="mv-content pc-only"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.png" width="610" height="700" alt=""/>
      <div class="mv-txt">
	<!-- <p class="mv-txt-b smooth">「想いをカタチに」</p> -->
        <h1 class="smooth">クライアントの想いをカタチに<br>見やすいWEBサイト制作を<br>心がけています</h1>
        <button type="button" onClick="location.href='/about/'" class="btn smooth">詳しく見る</button>
      </div>
    </div>
	  <div class="mv-content">
		  <div class="sp-only">
      <div class="mv-txt">
		 <!-- <p class="mv-txt-b smooth">WEB制作から始まる</p> -->
        <h1  class="smooth">クライアントの想いをカタチに<br>見やすいWEBサイト制作を<br>心がけています</h1>
        <button type="button" onClick="location.href='/about/'" class="btn smooth" style="margin-bottom: 20px;">詳しく見る</button>
		  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.png" width="610" height="700" alt=""/>
      </div>
		  </div>
    </div>
  </section>
  <section id="lead" class="l-content-fixed">
    <h2 class="smooth">ライフパフォーマンスとは</h2>
    <p class="sub-title">デザイン設計からWEBサイト開発やCMS構築までワンストップで対応</p>
    <p class="txt-small">それぞれの企業フェーズあったビジネスパフォーマンス向上のサポートサービスをご提供いたします。重要な企業や商品のコンセプトは、WEB制作において重要な要素の一つとなります。コンセプトを具体的な形にするために、デザインからWEBサイトの制作・運営サポートに至るまで、一貫したアプローチで取り組んでいます。</p>
    <p class="txt-small">当社では、コーディング・構築においては主にコーポレートサイトやランディングページ、ECサイトなどを中心に、WEB制作に関連するデザインやプログラミング、システム開発など、ワンストップで幅広く対応しています。また、印刷物についても、協力会社と連携して高品質な制作を行っています。</p>
  </section>
  <section id="about" class="l-content-expanded">
    <div class="l-content-fixed">
      <h2>特徴</h2>
      <ul class="about-content delayScroll">
        <li class="fadeUpTrigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-content1.png" width="320" height="160" alt=""/>
          <h4>ビジネスパフォーマンスを向上させるビジネス戦略をお手伝いします。</h4>
          <p class="txt-small">・WEBサイトデザイン/制作　・商品ブランディング　・ECサイト販売支援事業　・WEBサイト運用/集客<br>お客様のビジネスパフォーマンスを飛躍的に向上させるための４つのプロジェクトを進めております。私たちの目標は、お客様の競争力を高め、持続的な成長に貢献することです。</p>
        </li>
        <li class="fadeUpTrigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-content2.png" width="320" height="160" alt=""/>
          <h4>デザインから実装までワンストップ</h4>
          <p class="txt-small">ご希望のWEBサイト完成に向けてしっかりとお打ち合わせさせていただき、デザイン制作からコーディング～実装～レスポンシブ対応までワンストップで作業いたします。<br>その後の運用フェーズまでもトータルでご支援可能です。</p>
        </li>
        <li class="fadeUpTrigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-content3.png" width="320" height="160" alt=""/>
          <h4>外部パートナーとしても対応</h4>
          <p class="txt-small">良きパートナーとして、ご依頼内容に沿って柔軟に対応いたします。スポット作業「デザイン制作のみ」「コーディング作業のみ」「WEBサイト改修作業のみ」など我々に出来ることはご協力いたします。</p>
        </li>
      </ul>
    </div>
  </section>
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
  <!-- <section id="portfolio" class="l-content-fixed">
	  <h2>ポートフォリオ</h2>
	  <ul class="portfolio-content">
		<li class="portfolio-item"><a href="https://lifeperformance.jp/portfolio/e-shop/index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio1.png" width="320" height="160" alt=""/></a>
			  <div class="portfolio-area">
			  <p>ECサイト</p>
			  </div>
		  </li> 
		  <li class="portfolio-item"><a href="https://lifeperformance.jp/portfolio/corporate3/index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio3.png" width="320" height="160" alt=""/></a>
			  <div class="portfolio-area">
			  <p>コーポレートサイト</p>
			  </div>
		  </li>
		  <li class="portfolio-item"><a href="https://lifeperformance.jp/portfolio/corporate2/index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio2.png" width="320" height="160" alt=""/></a> 
			  <div class="portfolio-area">
			  <p>コーポレートサイト</p>
			  </div>
		  </li>
	  </ul>
	</section> -->
  <section id="works" class="l-content-fixed">
    <h2>実績</h2>
    <ul class="works-content">
      <li class="works-item"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-content1.jpg" alt="">
        <div class="works-area">
          <h3>コーポレートサイト</h3>
          <p class="txt-small">【企画・設計】<br>
            合同製作<br>
            【デザイン製作】<br>
            ライフパフォーマンス<br>
            【コーディング】<br>
            ライフパフォーマンス<br>
            【CMS設定/その他開発】<br>
            ライフパフォーマンス</p>
        </div>
      </li>
      <li class="works-item"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-content2.jpg" alt="">
        <div class="works-area">
          <h3>ECサイト</h3>
          <p class="txt-small">【企画・設計】<br>
            ライフパフォーマンス<br>
            【デザイン製作】<br>
            ライフパフォーマンス<br>
            【コーディング】<br>
            ライフパフォーマンス<br>
            【CMS設定/その他開発】<br>
            ライフパフォーマンス</p>
        </div>
      </li>
      <li class="works-item"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-content3.jpg" alt="">
        <div class="works-area">
          <h3>ランディングページ</h3>
          <p class="txt-small">【企画・設計】<br>
            合同製作<br>
            【デザイン製作】<br>
            ライフパフォーマンス<br>
            【コーディング】<br>
            ライフパフォーマンス<br>
            【その他開発】<br>
            ライフパフォーマンス</p>
        </div>
      </li>
    </ul>
	  <div><button type="button" onClick="location.href='/works/'" class="btn btn-works-area">詳しく見る</button></div>
  </section>
  <section id="plan" class="l-content-fixed">
    <h2>プラン</h2>
    <div>
		
        <ul class="plan-content">
          <li class="plan-item">
            <div class="plan-sp"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-content1.jpg" alt="コーポレートサイト">
              <h3 class="plan-title sp-only">ケース1<span class="txt-small">コーポレートサイト</span></h3>
            </div>
            <div class="plan-info">
              <h3 class="plan-title pc-only">ケース1<span class="txt-small">コーポレートサイト</span></h3>
              <p class="txt-small">Wordpress（CMS）によるオリジナルデザインの小規模コーポレートサイトになります。<br>
                【ページ構成】<br>
                ・TOPページ<br>
                ・固定ページ<br>
                ・投稿ページ<br>
                ・コンタクトフォーム<br>
                ・404ページ<br>
                全体で約１０ページ程度。<br>
                【制作内容】<br>
                デザイン構成・コーディング・WordPress組み込み・カスタム投稿<br>
                ＊画像・社名ロゴなど支給<br>
                ＊スマホ対応（レスポンシブデザイン）<br>
                ＊ドメイン・サーバなど支給</p>
            </div>
            <!-- <p class="price">200,000円～</p> -->
          </li>
          <li class="plan-item">
            <div class="plan-sp"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-content2.jpg" alt="ECサイト">
              <h3 class="plan-title sp-only">ケース2<span class="txt-small">ECサイト</span></h3>
            </div>
            <div class="plan-info">
              <h3 class="plan-title pc-only">ケース2<span class="txt-small">ECサイト</span></h3>
              <p class="txt-small">ECCUBE（CMS）によるオリジナルデザインの小規模ECサイトになります。<br>
                【ページ構成】<br>
                ・TOPページ<br>
                ・詳細ページ<br>
                ・一覧ページ<br>
                ・コンタクトフォーム<br>
                その他ページは、ECCUBEデフォルトを使用。カスマイズにより価格が前後しますので、要問い合わせください。<br>
                【制作内容】<br>
                デザイン構成・コーディング・ECCUBE組み込み<br>
                ＊決済サービスなどはお客様でのご契約となります。（契約代行も可能ですので、ご相談ください。）<br>
                ＊画像・社名ロゴなど支給<br>
                ＊スマホ対応（レスポンシブデザイン）<br>
                ＊ドメイン・サーバなど支給</p>
            </div>
            <!-- <p class="price">300,000円～</p> -->
          </li>
          <li class="plan-item">
            <div class="plan-sp"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-content3.jpg" alt="ランディングページ">
              <h3 class="plan-title sp-only">ケース3<span class="txt-small">ランディングページ</span></h3>
            </div>
            <div class="plan-info">
              <h3 class="plan-title pc-only">ケース3<span class="txt-small">ランディングページ</span></h3>
              <p class="txt-small">ランディングページ１ページのみの参考価格となります。<br>
                【ページ構成】<br>
                ランディングページ/１ページ<br>
                【制作内容】<br>
                デザイン構成・コーディング<br>
                ＊コーディング作業のみも可能です。ご相談ください。<br>
                ＊画像・社名ロゴなど支給<br>
                ＊スマホ対応（レスポンシブデザイン）<br>
                ＊ドメイン・サーバなど支給</p>
            </div>
            <!-- <p class="price">100,000円～</p> -->
          </li>
        </ul>
    </div>
  </section>
  <section id="news" class="l-content-fixed">
    <h2>お知らせ</h2>
    <table class="table-list section-news-list">
      <tbody>
        <?php
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 5,
        );
        $wp_query = new WP_Query( $args );
        if ( $wp_query->have_posts() ):
          while ( $wp_query->have_posts() ): $wp_query->the_post();
        ?>
        <tr>
          <td class="table-list-date"><time datetime="2021-09-13">
              <?php the_time('Y.m.d'); ?>
            </time></td>
      <td><?php the_title(); ?></td>      
			<td><?php the_field('comment'); ?></td>
      <td class="pdf_area"><?php if( get_field('pdf') ): ?><a href="<?php the_field('pdf'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pdf2.svg"></a><?php endif; ?></td>
        </tr>
        <?php
        endwhile;
        wp_reset_postdata();
        endif;
        ?>
      </tbody>
    </table>
  </section>
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
</main>

<?php get_footer(); ?>