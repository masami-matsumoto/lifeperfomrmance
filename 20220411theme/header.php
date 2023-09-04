<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<script>
  (function(d) {
    var config = {
      kitId: 'vqw3vey',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"/>

<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">


<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/android-icon.png">
<link rel="stylesheet" href="https://use.typekit.net/dxn7hrs.css">
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X82F552SSH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X82F552SSH');
</script>

</head>
<body>
<header id="header">
  <div class="header-logo"><a href="https://lifeperformance.jp/index.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="ロゴ"/></a></div>
  <div class="openbtn"><span></span><span></span><span></span></div>
  <nav id="g-nav">
    <div id="g-nav-list">
      <?php wp_nav_menu(
array(
'theme_location' => 'place_global',
'container' => false,
'menu_class' => 'nav',
'link_before' => '<div>',
'link_after' => '</div>',
'items_wrap' => '<ul>%3$s</ul>',
)
);
		?>
    </div>
  </nav>
	<?php wp_head(); ?>
</header>
<div class="circle-bg"></div>