<?php
/*
Template Name: 事業概要
*/
get_header();
?>
<main class="l-content-fixed page-about" id="page">
  <section class="about-wrapper">
    <h1>事業概要<span class="page-about-en">ABOUT</span></h1>
    <ul class="tab">
      <li><a href="#company" class="first-item">事業概要</a></li>
      <li><a href="#profile">プロフィール</a></li>
      <li><a href="#service">サービス</a></li>
    </ul>
    <div id="company" class="area">
      <table class="table-list">
        <tr>
          <th>屋号</th>
          <td>ライフパフォーマンス</td>
        </tr>
        <tr>
          <th>事業形態</th>
          <td>個人事業主</td>
        </tr>
        <tr>
          <th>代表</th>
          <td>松本　昌己</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2018年9月</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>〒160-0023 東京都新宿区西新宿3-2-9　新宿ワシントンホテルビル本館2F</td>
        </tr>
        <tr>
          <th>アドレス</th>
          <td>info@lifeperformance.jp</td>
        </tr>
        <tr>
          <th>会員</th>
          <td>フリーランス協会</td>
        </tr>
        <tr>
          <th>パートナー</th>
          <td>GMO MakeShop</td>
        </tr>
      </table>
      <!--/area--></div>
    <div id="profile" class="area">
      <h2>松本　昌己</h2>
      <h3>masami matsumoto</h3>
      <p class="txt-large">海外留学（ニュージーランド）後、15年ほど印刷業を経てWEBデザインに転向。<br>
        WEBデザイン・プログラミングスクールで基礎を学んだ後、下積み経験を生かして2018年よりライフパフォーマンスとして活動を開始しました。 </p>
      <!--/area--></div>
    <div id="service" class="area">
      <table class="table-list">
        <tr>
          <th>Web関連</th>
          <td>Webサイト制作・開発・運用・保守 / LP制作 / CMS構築・カスタマイズ /<br>
            情報設計・ワイヤーフレーム 制作 </td>
        </tr>
        <tr>
          <th>印刷関連</th>
          <td>印刷物デザイン・設計/印刷物製作<br>
            （協力印刷会社：地元活性化プロジェクトにより北海道企業様に委託）</td>
        </tr>
        <tr>
          <th>開発スキル</th>
          <td>フロントエンド<br>
            HTML / CSS・Sass<br>
            JavaScript - jQuery・Vue.js・React.js<br>
          バックエンド<br>
            PHP - Laravel・cakePHP・symfony（要相談）<br>
          データベース<br>
            MySQL / SQLite<br>
          CMS<br>
            WordPress / ECCUBE </td>
        </tr>
        <tr>
          <th>開発環境</th>
          <td>デザイン<br>
            illustrator / Photoshop / XD / Premiere Pro / After Effect<br>
            エディタ<br>
            Visual Studio Code / Vim / Dreamweaver / cloud９<br>
            バージョン管理<br>
            Git / github </td>
        </tr>
      </table>
      <p class="txt-box">ライフパフォーマンスでは、スポット作業「デザイン制作のみ」「コーディング作業のみ」「WEBサイト改修作業のみ」など我々に出来ることは柔軟に対応いたしますので、気軽にお問い合わせください。</p>
      
      <!--/area--></div>
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