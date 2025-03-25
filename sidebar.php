<!-- get_sidebar(); -->
<?php if (is_active_sidebar('sidebar-1')) : ?>
  <?php dynamic_sidebar('sidebar-1'); ?>
<?php endif; ?>

<!-- カテゴリーのリストを表示 -->
<?php wp_list_categories('title_li='); ?>

<!-- アーカイブのリストを表示 -->
<?php wp_get_archives('type=monthly&show_post_count=true'); ?>