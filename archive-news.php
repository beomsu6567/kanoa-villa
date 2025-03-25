<?php get_header(); ?>
<div class="container">
  <?php
  $args = array(
    'post_type' => 'news',
    'posts_per_page' => -1,
  );
  $query = new WP_Query($args);
  ?>
  <?php if ($query->have_posts()) : ?>
    <ul class="news-list">
      <?php
      while ($query->have_posts()):
        $query->the_post();
      ?>
        <li>
          <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
          <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
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