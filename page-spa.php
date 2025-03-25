<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
?>
    <div class="container">
      <div class="mb100 mb80-tb">
        <h3>山中湖平野温泉</h3>
        <h5 class="center-text">
          ⼭中湖平野温泉を配した<br />
          客室温泉露天⾵呂
        </h5>
        <p class="center-text">日本最高級の高アルカリ性温泉を各客室に完備した客室温泉露天⾵呂。pH10.2という国内でも有数のアルカリ性を有していながらも肌触りの良い非常に珍しい泉質となります。</p>
      </div>
      <div class="spa-list">
        <section class="spa-content" data-aos="fade-up">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/spa/img01.jpg" alt="客室温泉露天⾵呂1" />
            <div class="small-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page/spa/img02.jpg" alt="客室温泉露天⾵呂2" />
            </div>
          </div>
          <div class="txt-box">
            <h4>源泉名・泉質・温泉効能</h4>
            <table class="table02">
              <tbody>
                <tr>
                  <th style="width: 110px">源泉名</th>
                  <td>山中湖平野温泉</td>
                </tr>
                <tr>
                  <th>泉質</th>
                  <td>アルカリ性単純温泉（低張性アルカリ性低温泉）</td>
                </tr>
                <tr>
                  <th>温泉効能</th>
                  <td>神経痛、筋肉痛、関節痛、美肌、五十肩、運動麻痺、うちみ、関節のこわばり、くじき、慢性消化器病、痔疾、冷え性、病後回復期、疲労回復、健康増進</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section class="spa-content" data-aos="fade-up">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/spa/img01.jpg" alt="客室温泉露天⾵呂1" />
            <div class="small-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page/spa/img02.jpg" alt="客室温泉露天⾵呂2" />
            </div>
          </div>
          <div class="txt-box">
            <h4>源泉名・泉質・温泉効能</h4>
            <table class="table02">
              <tbody>
                <tr>
                  <th style="width: 110px">源泉名</th>
                  <td>山中湖平野温泉</td>
                </tr>
                <tr>
                  <th>泉質</th>
                  <td>アルカリ性単純温泉（低張性アルカリ性低温泉）</td>
                </tr>
                <tr>
                  <th>温泉効能</th>
                  <td>神経痛、筋肉痛、関節痛、美肌、五十肩、運動麻痺、うちみ、関節のこわばり、くじき、慢性消化器病、痔疾、冷え性、病後回復期、疲労回復、健康増進</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>