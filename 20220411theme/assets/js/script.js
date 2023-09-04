/*===========================================================*/
/*機能編  5-1-21 クリックしたら円形背景が拡大（右下から）*/
/*===========================================================*/
jQuery(function($){
$(".openbtn").click(function () { //ボタンがクリックされたら
  $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
  $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
  $(".circle-bg").toggleClass('circleactive'); //丸背景にcircleactiveクラスを付与
});

$("#g-nav a").click(function () { //ナビゲーションのリンクがクリックされたら
  $(".openbtn").removeClass('active'); //ボタンの activeクラスを除去し
  $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスを除去
  $(".circle-bg").removeClass('circleactive'); //丸背景のcircleactiveクラスを除去
});
/*===========================================================*/
/*機能編 8-1-9	スクロールの速さが変化*/
/*===========================================================*/

// #page-topをクリックした際の設定
$('#page-top').click(function () {
  $('body,html').animate({
    scrollTop: 0 //ページトップまでスクロール
  }, 500); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});

/*===========================================================*/
/* 印象編 4 最低限おぼえておきたい動き*/
/*===========================================================*/

// 動きのきっかけの起点となるアニメーションの名前を定義
function delayScrollAnime() {
  var time = 0.6; //遅延時間を増やす秒数の値
  var value = time;
  $('.delayScroll').each(function () {
    var parent = this; //親要素を取得
    var elemPos = $(this).offset().top; //要素の位置まで来たら
    var scroll = $(window).scrollTop(); //スクロール値を取得
    var windowHeight = $(window).height(); //画面の高さを取得
    var childs = $(this).children(); //子要素を取得

    if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) { //指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
      $(childs).each(function () {
        if (!$(this).hasClass("fadeUp")) { //アニメーションのクラスが指定されているどうかチェック

          $(parent).addClass("play"); //親要素にクラス名playを追加
          $(this).css("animation-delay", value + "s"); //アニメーション遅延のcss、animation-delayを追加し
          $(this).addClass("fadeUp"); //アニメーションのクラス名を追加
          value = value + time; //delay時間を増加させる

          //すべての処理が終わったらplayを外す
          var index = $(childs).index(this);
          if ((childs.length - 1) == index) {
            $(parent).removeClass("play");
          }

        }
      })
    }
  })
// ボンッ
  $('.zoomInTrigger').each(function(){ //zoomInTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('zoomIn');// 画面内に入ったらzoomInというクラス名を追記
    }else{
    $(this).removeClass('zoomIn');// 画面外に出たらzoomInというクラス名を外す
    }
    });
}
/*===========================================================*/
/* 関数をまとめる*/
/*===========================================================*/
// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  delayScrollAnime(); //印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
});

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  delayScrollAnime(); //印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
});


//=====ここまで背景が伸びた後に動かしたいJSをまとめる
});