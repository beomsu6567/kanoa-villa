<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">

<head prefix="og: //ogp.me/ns# fb: //ogp.me/ns/fb# website: //ogp.me/ns/website#">
  <meta charset="<?php echo bloginfo('charset'); ?>">
  <!-- XSS保護 (現代のブラウザでは自動ですが念のため) -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="キーワード" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <meta name="format-detection" content="email=no,telephone=no,address=no" />
  <?php if (is_404()): ?>
    <meta http-equiv="Refresh" content="5; URL=<?php echo home_url(); ?>">
  <?php endif; ?>

  <link rel="preconnect" href="//fonts.googleapis.com" />
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin />
  <link href="//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome-free/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <script>
    $(window).on("load", function() {
      AOS.init({
        offset: 200,
        duration: 1000,
        easing: "ease-in-sine",
        delay: 0,
        once: true,
      });
    });
  </script>
  <header>
    <div class="h-wrap">
      <h1 class="logo-box">
        <a href="<?php echo get_home_url(); ?>" class="fade">
          KANOA THE VILLAS<br />
          ～富士山中湖～
        </a>
      </h1>
    </div>
    <input type="checkbox" id="slide-menu-check" />
    <label for="slide-menu-check" class="slide-menu-btn">
      <div class="bdr-box">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </label>
    <div class="slide-menu">
      <div class="logo-box">
        <div class="img-box">
          <a href="index.html" class="fade">
            KANOA THE VILLAS<br />
            ～富士山中湖～
          </a>
        </div>
      </div>
      <div class="lang-btn">
        <input type="checkbox" id="lang-btn" />
        <label for="lang-btn">
          <i class="fa-solid fa-globe"></i>
          <span>日本語</span>
        </label>
        <ul class="lang-list">
          <li><a href="//en.chichibu-privatevilla-komura.com" lang="en" class="fade">English</a></li>
        </ul>
      </div>
      <div class="btn-box">
        <div class="item">
          <a href="mailto:kanoa.fujiyamanakako@gmail.com?subject=【カノア 富士山中湖 ヴィラ】お問い合わせ&amp;cc=k.tokunaga@kanoagp.com">メール問合はこちら</a>
        </div>
        <div class="item">
          <a href="//reserve.489ban.net/client/gr-kanoa/0/plan/stay?planTags%5B21498%5D=1&amp;searchTagMode=0&amp;keepTags=2" class="reservation" target="_blank">ご予約はこちら</a>
        </div>
      </div>
      <nav class="nav-list">
        <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
      </nav>
    </div>
    <div class="header-others-btn">
      <a href="//www.yamanashi-spa-glamping.com/" target="_blank">グループ施設</a>
      <a href="//reserve.489ban.net/client/gr-kanoa/0/plan/stay?planTags%5B21498%5D=1&amp;searchTagMode=0&amp;keepTags=2" class="reservation" target="_blank">ご予約はこちら</a>
      <a href="<?php echo get_home_url(); ?>#access" class="tb">アクセス</a>
    </div>
  </header>
  <?php if (is_front_page()): ?>
    <div class="key-visual -top">
      <div class="key-img" data-aos="fade-zoom-in">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/sl01.jpg" width="1437" height="800" alt="スライド1" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/mv_3.jpg" width="1437" height="800" alt="スライド2" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/mv_5.jpg" width="1437" height="800" alt="スライド3" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/mv_6.jpg" width="1437" height="800" alt="スライド4" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/mv_2new.jpg" width="1437" height="800" alt="スライド5" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/mv_8.jpg" width="1437" height="800" alt="スライド6" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/mv_4.jpg" width="1437" height="800" alt="スライド7" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-box">
              <img src="https://www.yamanashi-spa-glamping.com/wp-content/themes/yamanashi-spa/img/swiper/mv_7.jpg" width="1437" height="800" alt="スライド8" />
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php elseif (is_archive() || is_single()): ?>
    <?php
    $post_type = get_query_var('post_type');
    $post_type_object = get_post_type_object($post_type);
    ?>
    <div class="key-visual" data-aos="fade-zoom-in">
      <div class="key-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/page/<?php echo $post_type; ?>/key.jpg" alt="<?php echo get_the_title(); ?>" />
      </div>
      <div class="key-txt">
        <h2><?php echo $post_type_object->label; ?></h2>
      </div>
    </div>
    <div class="breadcrumbs" data-aos="fade-zoom-in">
      <div class="container">
        <ul class="breadcrumbs-list">
          <li>
            <a href="<?php echo get_home_url(); ?>">TOP</a>
          </li>
          <?php if (is_archive()): ?>
            <li><?php echo $post_type_object->label; ?></li>
          <?php endif; ?>
          <?php if (is_single()): ?>
            <li>
              <a href="/<?php echo $post_type; ?>/"><?php echo $post_type_object->label; ?></a>
            </li>
            <li>
              <?php echo get_the_title(); ?>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  <?php else: ?>
    <?php
    global $post;
    $slug = $post->post_name;
    ?>
    <div class="key-visual" data-aos="fade-zoom-in">
      <div class="key-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/page/<?php echo $slug; ?>/key.jpg" alt="<?php echo get_the_title(); ?>" />
      </div>
      <div class="key-txt">
        <h2><?php echo get_the_title(); ?></h2>
      </div>
    </div>
    <div class="breadcrumbs" data-aos="fade-zoom-in">
      <div class="container">
        <ul class="breadcrumbs-list">
          <li>
            <a href="<?php echo get_home_url(); ?>">TOP</a>
          </li>
          <li><?php echo get_the_title(); ?></li>
        </ul>
      </div>
    </div>
  <?php endif; ?>

  <main>