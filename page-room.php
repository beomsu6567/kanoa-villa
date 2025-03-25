<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
?>
    <div class="owl100 owl80-tb">
      <section>
        <div class="container">
          <h3>大型ドームテントを使用した ゆとりの客室</h3>
          <p class="center-text">
            各最大300㎡の専有面積を確保し、 プライベートガーデンや大画面シアターなど 多様なお部屋をご用意しております。<br />
            各棟には専用の客室温泉露天風呂、トイレ、 悪天候でも安心の食事スペースを完備。<br />
            アウトドアが苦手な方でも安心して お過ごしいただけるお部屋となっております。
          </p>
        </div>
      </section>
      <section>
        <p class="en-ttl center-text">ROOM</p>
        <h5 class="center-text mb80 mb50-tb">部屋のご紹介</h5>
        <div class="room-content">
          <div class="room-detail">
            <div class="room-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img01.jpg" alt="部屋タイプ1" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img02.jpg" alt="部屋タイプ2" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img03.jpg" alt="部屋タイプ3" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img04.jpg" alt="部屋タイプ4" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img05.jpg" alt="部屋タイプ5" />
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>

              <div class="swiper-button swiper-button-prev"></div>
              <div class="swiper-button swiper-button-next"></div>
            </div>
            <div class="container">
              <h4>type01</h4>
              <table class="table01">
                <tbody>
                  <tr>
                    <th style="width: 150px">広さ</th>
                    <td>
                      敷地面積 169.4㎡<br />
                      客室面積 66㎡
                    </td>
                  </tr>
                  <tr>
                    <th>お風呂</th>
                    <td>客室温泉露天風呂</td>
                  </tr>
                  <tr>
                    <th>定員</th>
                    <td>2～6名</td>
                  </tr>
                  <tr>
                    <th>ベッド数</th>
                    <td>
                      シングルベッド×2<br />
                      ダブルベッド×1<br />
                      5名様以上の場合にはエキストラベッドをご用意いたします。<br />
                      ※4名様以内でエキストラベッドをご希望の場合は有料となります。
                    </td>
                  </tr>
                  <tr>
                    <th>棟数</th>
                    <td>1棟</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="room-detail">
            <div class="room-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img01.jpg" alt="部屋タイプ1" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img02.jpg" alt="部屋タイプ2" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img03.jpg" alt="部屋タイプ3" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img04.jpg" alt="部屋タイプ4" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/room/img05.jpg" alt="部屋タイプ5" />
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>

              <div class="swiper-button swiper-button-prev"></div>
              <div class="swiper-button swiper-button-next"></div>
            </div>
            <div class="container">
              <h4>type02</h4>
              <table class="table01">
                <tbody>
                  <tr>
                    <th style="width: 150px">広さ</th>
                    <td>
                      敷地面積 169.4㎡<br />
                      客室面積 66㎡
                    </td>
                  </tr>
                  <tr>
                    <th>お風呂</th>
                    <td>客室温泉露天風呂</td>
                  </tr>
                  <tr>
                    <th>定員</th>
                    <td>2～6名</td>
                  </tr>
                  <tr>
                    <th>ベッド数</th>
                    <td>
                      シングルベッド×2<br />
                      ダブルベッド×1<br />
                      5名様以上の場合にはエキストラベッドをご用意いたします。<br />
                      ※4名様以内でエキストラベッドをご希望の場合は有料となります。
                    </td>
                  </tr>
                  <tr>
                    <th>棟数</th>
                    <td>1棟</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>