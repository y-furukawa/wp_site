<?php get_header(); ?>

    <main>
        <div class="inner">
            <h2 class="nomal_title">Store</h2>
            <div class="store-list">


                <div class="store_wrap">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    

                    <div class="store_single">
                        <div class="store_text">
                            <p class="store_title">                                <?php the_title(); ?></p>
                            <div class="store_area">
                            <p><?php the_post_thumbnail('full'); ?></p>
<div>
                        <p><?php echo post_custom('adress') ?></p>
                        <p><?php echo post_custom('eigyo') ?></p>
                        <p><?php echo post_custom('teikyu') ?></p>
                        <p><?php echo post_custom('denwa') ?></p>
                        </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;endif; ?>
<!-- 
                    <div class="store_single">
                        <p><img src="../common/img/store02.png" alt=""></p>
                        <div class="store_text">
                            <p class="store_title">CURRY MURCHE新宿本店</p>
                            <div class="store_area">
                                <p>東京都新宿区愛住町xxxxx</p>
                                <p>10:00～21:00</p>
                                <p>毎週水曜定休</p>
                                <p>TEL:03-xxxx-xxxx</p>
                            </div>
                        </div>
                    </div>

                    <div class="store_single">
                        <p><img src="../common/img/store03.png" alt=""></p>
                        <div class="store_text">
                            <p class="store_title">CURRY MURCHE新宿本店</p>
                            <div class="store_area">
                                <p>東京都新宿区愛住町xxxxx</p>
                                <p>10:00～21:00</p>
                                <p>毎週水曜定休</p>
                                <p>TEL:03-xxxx-xxxx</p>
                            </div>
                        </div>
                    </div> -->



                </div>


                <aside>
                    <div class="basyo">
                        <p>東京都</p>
                        <p>神奈川県</p>
                        <p>千葉県</p>
                        <p>福岡県</p>
                        <p>北海道</p>
                        <p>ハワイ</p>
                    </div>
                </aside>
            </div>

        </div>
        <!-- inner -->
    </main>

    <?php get_footer(); ?>