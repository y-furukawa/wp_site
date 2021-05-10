<?php get_header(); ?>
        <div class="inner">
            <h2 class="nomal_title">Shopping</h2>
            <div class="shopping-list">
                <div class="shopping_key">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/shopping_key.png" alt="">
                    <p>ご家庭で本格カレー<br>
                        Curry Marcheのオンラインショップ</p>
                </div>

                <div class="shopping_wrap">
                    <div class="shopping_wrap-left">
                        <p class="nomal_title" id="curry">カレー</p>

                        <div class="shopping_line1">


                        <?php $curry =new WP_Query([
                    'post_type'=>'shopping',
                    'posts_per_page' => 4 ,
                    'tax_query'=>[
                        [
                            'taxonomy'=>'item',     //カスタムタクソノミーを作ったときの名前
                            'field'=>'slug',        //スラッグで調べる
                            'terms'=>'curry'    //何がほしいのか
                            ]
                    ]

                ]);
                ?>

                <?php if ($curry->have_posts()) : while ($curry->have_posts()) : $curry->the_post();?>
                <div class="shopping_single">
                                <p><?php the_post_thumbnail('full'); ?></p>
                               <h2> <?php the_title(); ?></h2>
                                <?php the_content(); ?>
                                <p id="btn"><a href="<?php the_permalink();?>">購入ページへ進む</a></p>
                </div>

                <?php endwhile;endif; ?>

                            <!-- <div class="shopping_single">
                                <p><img src="../common/img/shopping_02.png" alt=""></p>
                                <p class="shopping_title">野菜ゴロゴロカレー</p>
                                <p>インドカレーの美味しさと野菜のヘルシーさを<br>
                                    両立させたカレー。女性に人気のメニュー</p>
                                <p id="btn"><a href="#">この商品を購入</a></p>
                            </div> -->
                        </div>
<!-- 
                        <div class="shopping_line1">
                            <div class="shopping_single">
                                <p><img src="../common/img/shopping_03.png" alt=""></p>
                                <p class="shopping_title">銀座カリー</p>
                                <p>人気No1。<br>
                                    本場インドカレーを日本人が心底愉しめるようにする為<br>
                                    完成したCurry Marche看板カレー</p>
                                <p id="btn"><a href="#">この商品を購入</a></p>
                            </div>

                            <div class="shopping_single">
                                <p><img src="../common/img/shopping_04.png" alt=""></p>
                                <p class="shopping_title">かぼちゃスープ</p>
                                <p>インドカレーの美味しさと野菜のヘルシーさを<br>
                                    両立させたカレー。女性に人気のメニュー</p>
                                <p id="btn"><a href="#">この商品を購入</a></p>
                            </div>
                        </div> -->

                        <p class="nomal_title" id="side">サイドメニュー</p>
                        <div class="shopping_line1">

                        
                        <?php $side =new WP_Query([
                    'post_type'=>'shopping',
                    'posts_per_page' => 4 ,
                    'tax_query'=>[
                        [
                            'taxonomy'=>'item',     //カスタムタクソノミーを作ったときの名前
                            'field'=>'slug',        //スラッグで調べる
                            'terms'=>'side'    //何がほしいのか
                            ]
                    ]

                ]);
                ?>

                <?php if ($side->have_posts()) : while ($side->have_posts()) : $side->the_post();?>
                <div class="shopping_single">
                <p><?php the_post_thumbnail('full'); ?></p>
            <h2>    <?php the_title(); ?></h2>
                <?php the_content(); ?>
                <p id="btn"><a href="<?php the_permalink();?>">購入ページへ進む</a></p>
                            </div>
                
                <?php endwhile;endif; ?>


                            <!-- <div class="shopping_single">
                                <p><img src="../common/img/shopping_06.png" alt=""></p>
                                <p class="shopping_title">店長の手ごねナン</p>
                                <p>インドカレーの美味しさと野菜のヘルシーさを<br>
                                    両立させたカレー。女性に人気のメニュー</p>
                                <p id="btn"><a href="#">この商品を購入</a></p>
                            </div> -->
                        </div>






                    </div>
                    <aside>
                        <div class="category"> 
                            <p class="category_title">カテゴリー</p>
                            <p><span></span></p>
                            <div class="category_single">
                                <p><a href="#curry">カレー</a></p>
                                <p>スープ</p>
                                <p><a href="#side">サイドメニュー</a></p>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
            <!-- inner -->
            <?php get_footer(); ?>