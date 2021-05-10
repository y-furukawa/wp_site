
<?php get_header(); ?>

    <main>
        <div class="inner">
            <div class="news-list">
                <h2 class="nomal_title">News</h2>
                <div class="news_wrap_ep3">
                    <div class="news_wrap_ep2">
                        <div class="news_wrap">
                        <?php if (have_posts()) : while (have_posts()) : the_post();?>



                            <div class="news_single">
                                <div class="news_title_wrap">
                                    <div class="verticalLine">
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                                    </div>

                                    <p class="news_title"><?php the_title() ?></p>
                                </div>
                                <p><?php the_post_thumbnail('full'); ?></p>
                                <?php the_excerpt(); ?>


                                <p id="btn"><a href="<?php the_permalink();?>">続きを読む</a></p>
                            </div>

                            <?php endwhile;endif; ?>
                            <?php wp_pagenavi(); ?>
                            <!-- <div class="news_single">
                                <div class="news_title_wrap">
                                    <div class="verticalLine">
                                        <p>2019</p>
                                        <p>12/09</p>
                                    </div>
                                    <p class="news_title">CURRY MURCHE銀座店オープン！</p>
                                </div>
                                <p><img src="../common/img/news01.png" alt=""></p>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p id="btn"><a href="#">続きを読む</a></p>
                            </div>

                            <div class="news_single">
                                <div class="news_title_wrap">
                                    <div class="verticalLine">
                                        <p>2019</p>
                                        <p>12/09</p>
                                    </div>
                                    <p class="news_title">CURRY MURCHE表参道店オープン！</p>
                                </div>
                                <p><img src="../common/img/news01.png" alt=""></p>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p id="btn"><a href="#">続きを読む</a></p>
                            </div> -->
                        </div>
                        <!-- <div class="news_pager">
                            <p><a href="#">1</a></p>
                            <p><a href="#">2</a></p>
                            <p><a href="#">3</a></p>
                            <p><a href="#">4</a></p>
                            <p><a href="#">5</a></p>
                        </div> -->
                    </div>

                    <aside>
                        <div class="achive">
                            <!-- <h2> ARCHIVE</h2> -->
                            <ul>
                 <?php dynamic_sidebar('news'); ?>
                             </ul>
                            <!-- <p>2019年12月(2)</p>
                            <p>2019年11月(2)</p>
                            <p>2019年10月(2)</p>
                            <p>2019年9月(2)</p>
                            <p>2019年8月(2)</p> -->

                        </div>
                    </aside>
                </div>
            </div>

        </div>
        <!-- inner -->
    </main>

    <?php get_footer(); ?>