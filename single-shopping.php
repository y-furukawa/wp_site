<?php get_header(); ?>
    <main>
        <div class="inner">
            <div class="menu-list">
                <h2 class="nomal_title">Shopping</h2>

                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                
                <div class="menu-single">
                <p><?php the_post_thumbnail('full'); ?></p>
                    <div class="menu-text">
                        <p class="menu-title">  <?php the_title(); ?></p>
                        <?php the_content(); ?>
                        <p><?php echo post_custom('price') ?></p>
                    </div>
                </div>
                <?php endwhile;endif; ?>
                <div class="info_wrap">
                    <div class="arerugi">
                        <h2>アレルギー情報</h2>
                        <p>乳・えび・かに・大豆・豚肉</p>
                    </div>

                    <div class="enerugi">
                        <h2>栄養情報</h2>
                        <div class="enerugi_wrap">
                            <div class="enerugi01">
                                <p>カロリー（Kcal） 122</p>
                                <p>たんぱく質（g）4.0</p>
                            </div>

                            <div class="enerugi01">
                                <p>脂質（g）5.6</p>
                                <p>炭水化物（g）13.9</p>
                            </div>

                            <div class="enerugi01">
                                <p>ナトリウム（mg）439</p>
                                <p>食塩相当量（g）1.1</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- inner -->
    </main>
    <?php get_footer(); ?>
