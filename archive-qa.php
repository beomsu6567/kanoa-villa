<?php get_header(); ?>
<div class="container">
  <?php
  $args = array(
    'post_type' => 'qa',
    'posts_per_page' => -1,
    'order' => 'ASC',
  );
  $query = new WP_Query($args);
  ?>
  <?php if ($query->have_posts()) : ?>
    <ul class="anchor-list">
      <?php
      while ($query->have_posts()):
        $query->the_post();
        $slug = get_post_field('post_name', get_the_ID());
      ?>
        <li>
          <a href="#<?php echo esc_attr($slug); ?>"><?php echo get_the_title(); ?></a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php
  endif;
  wp_reset_postdata();
  ?>
  <?php if ($query->have_posts()) : ?>
    <div class="owl100 owl80-tb">
      <?php
      while ($query->have_posts()):
        $query->the_post();
        $slug = get_post_field('post_name', get_the_ID());
      ?>
        <section id="<?php echo esc_attr($slug); ?>">
          <h4><?php echo get_the_title(); ?></h4>
          <ul class="qa-list">
            <?php
            $subimg = SCF::get('faq_list');
            foreach ($subimg as $field_name => $field_value) {
            ?>
              <li>
                <p class="q-txt"><?php echo nl2br($field_value['faq_question']); ?></p>
                <p class="a-txt"><?php echo nl2br($field_value['faq_answer']); ?></p>
              </li>
            <?php } ?>
          </ul>
        </section>
      <?php endwhile; ?>
    </div>
  <?php
  endif;
  wp_reset_postdata();
  ?>
</div>
<?php get_footer(); ?>