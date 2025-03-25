<?php get_header(); ?>
<div class="container">
  <p class="mb80 mb50-tb center-text">遊覧船やカフェも楽しめる♪山中湖周辺の観光情報をお知らせします。</p>
  <?php
  $args = array(
    'post_type' => 'surrounding',
    'posts_per_page' => -1,
  );
  $query = new WP_Query($args);
  ?>
  <?php if ($query->have_posts()) : ?>
    <ul class="sightseeing-list">
      <?php
      while ($query->have_posts()):
        $query->the_post();
      ?>
        <li class="hover-all fade">
          <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
          <div class="img-box">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
          </div>
          <div class="txt-box">
            <p class="ttl"><?php echo get_the_title(); ?></p>
            <p class="txt">
              <?php
              if (mb_strlen($post->post_content, 'UTF-8') > 40) {
                $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 40, 'UTF-8'));
                echo $content . '…';
              } else {
                echo str_replace('\n', '', strip_tags($post->post_content));
              }
              ?>
            </p>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else: ?>
    <p class="center-text">記事情報がありません。</p>
  <?php
  endif;
  wp_reset_postdata();
  ?>
</div>
<?php get_footer(); ?>