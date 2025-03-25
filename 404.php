<?php get_header(); ?>
<main>
  <div class="container">
    <p class="center-text mb50">
      申し訳ありませんが、現在このページは存在しません。<br>
      以下ページにアクセスして目的のページを再度お探しくださいませ。<br>
      ※5秒後に自動的にページが切り替わります。
    </p>
    <p class="center-text"><a href="<?php echo home_url(); ?>" style="word-break: break-all;"><?php echo home_url(); ?></a></p>
  </div>
</main>
<?php get_footer(); ?>