<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
?>
    <div class="container">
      <p class="mb10">
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
      </p>
      <h4><?php echo get_the_title(); ?></h4>
      <?php if (get_the_post_thumbnail_url()): ?>
        <div class="detail-img mb80 mb50-tb">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w100" alt="お知らせのタイトルが入ります。" />
        </div>
      <?php endif; ?>
      <?php if (get_post_type() === 'surrounding'): ?>
        <div class="detail-content mb80 mb50-tb">
          <table class="table02">
            <tbody>
              <?php if (post_custom('url_link')): ?>
                <tr>
                  <th style="width: 120px">公式HP</th>
                  <td>
                    <a href="<?php echo SCF::get('url_link'); ?>" class="fade" target="_blank"><?php echo SCF::get('url_link'); ?></a>
                  </td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_period')): ?>
                <tr>
                  <th>期間</th>
                  <td><?php echo SCF::get('a_period'); ?></td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_holiday')): ?>
                <tr>
                  <th>運休日</th>
                  <td><?php echo SCF::get('a_holiday'); ?></td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_age')): ?>
                <tr>
                  <th>対象年齢</th>
                  <td><?php echo SCF::get('a_age'); ?></td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_price')): ?>
                <tr>
                  <th>料金</th>
                  <td><?php echo SCF::get('a_price'); ?></td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_time')): ?>
                <tr>
                  <th>利用時間</th>
                  <td><?php echo SCF::get('a_time'); ?></td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_place')): ?>
                <tr>
                  <th>場所</th>
                  <td><?php echo SCF::get('a_place'); ?></td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_notes')): ?>
                <tr>
                  <th>注意事項</th>
                  <td><?php echo SCF::get('a_notes'); ?></td>
                </tr>
              <?php endif; ?>
              <?php if (post_custom('a_googlemap')): ?>
                <tr>
                  <th>Googleマップ</th>
                  <td><?php echo SCF::get('a_googlemap'); ?></td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
      <div class="news-content">
        <?php the_content(); ?>
      </div>
    </div>
<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>