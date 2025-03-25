</main>
<div id="resort-rg">
  <div class="rg_group">
    <p class="en-ttl white-txt center-text">ResortGlamping.com</p>
    <h4 class="top white-txt center-text">リゾートグランピングドットコム掲載施設</h4>
    <div class="box">
      <ul>
        <?php
        $args = array(
          'numberposts' => 21, //表示する記事の数
          'post_type' => 'resort_glamping', //カスタム投稿タイプの指定
          'order' => 'DESC',
        );
        $customPosts = get_posts($args);
        if ($customPosts):
          foreach ($customPosts as $post):
            setup_postdata($post);
        ?>
            <li class="hover-all fade">
              <a href="<?php echo SCF::get('rg-url'); ?>" target="_blank"></a>
              <div class="photo">
                <section
                  style="width: 90px; height: 60px; background-size: cover; background-image: url('<?php echo wp_get_attachment_image_url(SCF::get('rg-img')); ?>')"
                  class="lazyloaded"
                  data-back="<?php echo wp_get_attachment_image_url(SCF::get('rg-img')); ?>"></section>
              </div>
              <div class="txt">
                <p class="ttl"><?php echo get_the_title(); ?></p>
              </div>
            </li>
        <?php
          endforeach;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </div>
    <div class="rg_details">
      <div class="item">
        <p class="ttl">
          <a href="//www.resort-glamping.com/" target="_blank"> リゾートグランピングドットコムとは？ <i class="fas fa-external-link-alt"></i> </a>
        </p>
        <p class="txt">
          関東・関西・東海・中国エリアを中心とした国内の厳選されたグランピング施設をネット予約できるポータルサイト。実際に訪問した方のクチコミや旅レポーターによる体験記、観光情報も満載！
        </p>
      </div>
      <div class="item">
        <p class="ttl">
          <a href="//www.resort-glamping.com/" target="_blank">グランピング施設をお探しの方へ <i class="fas fa-external-link-alt"></i> </a>
        </p>
        <p class="txt">エリア、宿泊・日帰りプラン、施設のスペックなどからグランピング施設をお選びいただき、ご予約まで行っていただけます。</p>
      </div>
      <div class="item">
        <p class="ttl">
          <a href="//www.resort-glamping.com/participation/" target="_blank"> 施設運営者様へ <i class="fas fa-external-link-alt"></i> </a>
        </p>
        <p class="txt">リゾート事業30年で培った「閑散期対策」「冬対策」「遊休地活用」「集客ノウハウ」「広告ノウハウ」を共有いたします。</p>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="f-wrap">
      <div class="l-box">
        <div class="logo-box">
          <a href="<?php echo get_home_url(); ?>" class="fade">
            KANOA THE VILLAS<br>
            ～富士山中湖～
          </a>
        </div>
        <p class="address-txt">
          〒401-0502<br />
          山梨県南都留郡山中湖村平野字上原1061
        </p>
        <p class="tel-txt">TEL:<a href="tel:05088881061">050-8888-1061</a></p>
        <p class="reception-txt">受付時間：9：00～18：00</p>
      </div>
      <div class="r-box">
        <div class="btn-box">
          <div class="item">
            <a href="mailto:kanoa.fujiyamanakako@gmail.com?subject=【カノア 富士山中湖 ヴィラ】お問い合わせ&amp;cc=k.tokunaga@kanoagp.com" class="button01">メール問合はこちら</a>
          </div>
          <div class="item">
            <a href="//reserve.489ban.net/client/gr-kanoa/0/plan/stay?planTags%5B21498%5D=1&amp;searchTagMode=0&amp;keepTags=2" class="button02" target="_blank">ご予約はこちら</a>
          </div>
        </div>
        <nav class="nav-list">
          <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
        </nav>
      </div>
    </div>
  </div>
  <p class="copy">© 2023-2025 Booking Resort, Inc.</p>
</footer>
<?php if (is_front_page()): ?>
  <script>
    var mySwiper = new Swiper(".key-img", {
      loop: true,
      effect: "fade",
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      speed: 2000,
    });
  </script>
<?php elseif (is_page('room')): ?>
  <script>
    var mySwiper = new Swiper(".room-swiper", {
      loop: true,
      slidesPerView: 1.3,
      centeredSlides: true,

      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
        waitForTransition: false,
      },

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        869: {
          slidesPerView: 2,
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
<?php elseif (is_page('meal')): ?>
  <script>
    var mySwiper = new Swiper(".img-content", {
      loop: true,
      slidesPerView: 1.3,
      centeredSlides: true,

      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
        waitForTransition: false,
      },

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        869: {
          slidesPerView: 2,
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>