<?php get_header(); ?>
    <div id="key">
        <div class="inner_key">
            <div class="key_wrap">
                <div class="key_main">
                    <div class="key_wrapper">
                        <div id="vegas">
                        </div>
                        <!-- <ul class="bxslider_key">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_key00.jpg" alt=""></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_key02.jpg" alt=""></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_key03.jpg" alt=""></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_key04.jpg" alt=""></li>
                    </ul> -->
                        <ul class="bxslider_number">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/number04.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/number01.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/number02.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/number03.png" alt=""></li>
                        </ul>

                        <p id="number_right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/number_right.png" alt=""></p>
                    </div>
                    <!-- <div class="key_img bg-slider"></div>
                    <div class="bg-slider">

                    </div> -->
                    <div class="logo">
                        <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/logo.png" alt=""></a></p>
                        <p>
                            カレーと野菜<br>
                            ヘルシーカレーが楽しめる<br>
                            本格インドカレー専門店
                        </p>
                    </div>


                </div>
                <!-- <div class="scroll">
                    <p>scroll</p>
                    <div></div>
                </div> -->
            </div>
        </div>
    </div>
    <!--/#key-->

    <main>
        <div class="menu">
            <div class="inner">
                <div class="title">
                    <span></span>
                    <p>Menu</p>
                    <span></span>
                </div>
                <div class="menu_main">

                    <ul class="bxslider_menu">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/menu_curry01@2x.jpg"  alt="" width="800" height="500" title="カレーです">
                        </li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/menu_curry02@2x.jpg" alt="" width="800" height="500"></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/menu_curry03@2x.jpg" alt="" width="800" height="500"></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/menu_curry04@2x.jpg" alt="" width="800" height="500"></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/menu_curry05@2x.jpg" alt="" width="800" height="500"></li>
                    </ul>



                    <div class="bxslider_text">
                        <div>
                            <p>自家製豆腐ハンバーグカレー</p>
                            <p>ボリューム満点サラダ付き</p>
                        </div>
                        <div>
                            <p>辛いカレー</p>
                            <p>サラダ付き</p>
                        </div>
                        <div>
                            <p>かぼちゃカレー</p>
                            <p>サラダ付き</p>
                        </div>
                        <div>
                            <p>野菜カレー</p>
                            <p>サラダ付き</p>
                        </div>
                        <div>
                            <p>ナンカレー</p>
                            <p>サラダ付き</p>
                        </div>
                    </div>
                </div>
                <div class="custom-thumb">
                    <p><a data-slide-index="0" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_submenu01.png" alt="豆のカレー"></a></p>
                    <p><a data-slide-index="1" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_submenu02.png" alt="辛いカレー"></a></p>
                    <p><a data-slide-index="2" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_submenu03.png" alt="パンプキンカレー"></a></p>
                    <p><a data-slide-index="3" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_submenu04.png" alt="野菜カレー"></a></p>
                    <p><a data-slide-index="4" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_submenu05.png" alt="ナンカレー"></a></p>
                </div>
                <?php the_btn('more',get_post_type_archive_link('menu')); ?>

            </div>
        </div>
        <div class="shop">
            <div class="inner">
                <div class="shop_wrap">
                    <div class="title">
                        <span></span>
                        <p>Online shop</p>
                        <span></span>
                    </div>
                    <p>本店の人気カレーをご自宅で</p>
                    <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_shopping01.png" alt="かぼちゃっぽいカレー"></p>
                    <!-- <div class="bg-slider2"></div> -->
                </div>
                <?php the_btn('more',get_post_type_archive_link('shopping')); ?>
            </div>
        </div>
        <div class="news_main">
            <div class="inner">
                <div class="title">
                    <span></span>
                    <p>News</p>
                    <span></span>
                </div>

                <div class="news_main2">
                    <div class="news">
                    <?php 
                $news= new WP_Query([
                    'post_type'=>'post',
                    'posts_per_page'=>6
                ]);
                ?>

                <?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post();?>
                        <div class=news_wrap>
                        <div class=news_img>
                        <p><a href="<?php the_permalink();?>"><?php the_post_thumbnail('full'); ?></a></p>
                        </div>
                        <div>
                        <p><?php echo get_the_date(); ?></p>
                       <p> <?php the_title(); ?></p>
                   
                        </div>
                        </div>

			<?php endwhile;endif; ?>
                    <!-- <div>
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_news01.png" alt=""></p>
                            <p>11/18 <br>
                                恵比寿店新装開店
                            </p>
                        </div>


                     -->
                     <!-- 
                        <div>
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_news01.png" alt=""></p>
                            <p>11/18 <br>
                                恵比寿店新装開店
                            </p>
                        </div>
                        <div>
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_news02.png" alt=""></p>
                            <p>11/17 <br>
                                限定メニュー〇〇取り扱い開始
                            </p>
                        </div>
                    </div>

                    <div class="news">
                        <div>
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_news03.png" alt=""></p>
                            <p>11/18 <br>
                                代官山店新装開店
                            </p>
                        </div>
                        <div>
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_news04.png" alt=""></p>
                            <p>11/18 <br>
                                銀座店新装開店
                            </p>
                        </div>
                    </div>


                    <div class="news">
                        <div>
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_news05.png" alt=""></p>
                            <p>11/18 <br>
                                六本木店新装開店
                            </p>
                        </div>
                        <div>
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/top_news06.png" alt=""></p>
                            <p>11/18 <br>
                                表参道店新装開店
                            </p>
                        </div>
                    </div> -->
                </div>

            </div>



            <?php the_btn('more',get_page_link(get_page_by_path('/news'))); ?>
        </div>

        </div>






        <div class="location">
            <div class="inner">
                <div class="map_wrap">
                    <div class="title">
                        <span></span>
                        <p>Shop Lacation</p>
                        <span></span>
                    </div>

                    <div class="google_map_wrap">
                        <div class="google_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.397905721667!2d139.71824891525915!3d35.691824680191836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d5bce063c37%3A0xb548b9250334152f!2z44Kk44Oz44K_44O844OX44Op44OzSVTjgrnjgq_jg7zjg6vmlrDlrr_moKE!5e0!3m2!1sja!2sjp!4v1573543078413!5m2!1sja!2sjp"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>

                    <p>Sunday Curry
                        東京都新宿区愛住町xxxxxxx <br>
                        TEL:03-xxxx-xxxx <br>
                        Mail:xxxxxx@xxxx.com
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>