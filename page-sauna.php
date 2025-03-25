<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
?>
    <div class="container">
      <div class="mb100 mb80-tb">
        <h3>サウナ</h3>
        <h5 class="center-text">客室サウナ客室サウナ客室サウナ</h5>
        <p class="center-text">
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br />
          テキストテキストテキストテキストテキスト
        </p>
      </div>
      <div class="spa-list">
        <section class="spa-content" data-aos="fade-up">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/sauna/img01.jpg" alt="サウナ1" />
            <div class="small-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page/sauna/img02.jpg" alt="サウナ2" />
            </div>
          </div>
          <div class="txt-box">
            <h4>源泉名・泉質・温泉効能</h4>
            <p class="mb50 mb30-tb">
              敷地内にはアウトドアサウナと外気浴用ととのいチェアを設置。<br /><br />
              しっかり身体を温めて汗をかいた後は、大自然の中での外気浴。<br />
              木々のさざめき、爽やかな風を心地よく感じながら“ととのう”体験。<br />
              自然と一体となる癒しのひと時をご堪能ください。<br /><br />
              ■ご準備頂くもの：水着、ラッシュガードなどサウナ利用時の服装<br />
              ■ご利用方法　　：事前予約制です。ご希望の場合は予約ページ、オプション欄よりご選択下さい。 ※掲載写真はイメージです。
            </p>
            <table class="table02">
              <tbody>
                <tr>
                  <th style="width: 110px">対象年齢</th>
                  <td>※中学生以上</td>
                </tr>
                <tr>
                  <th>料金</th>
                  <td>50分制／1グループ3,000円(税込)</td>
                </tr>
                <tr>
                  <th>利用時間</th>
                  <td>16時～20時50分まで （16時・17時・18時・19時・20時からの5枠）</td>
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