
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
                                <?php the_title() ?>
                            </div>
                            <div>
                            <?php the_post_thumbnail('full'); ?>
                                 <?php the_content(); ?>
                                 </div>
                        </div>

                        <?php endwhile;endif; ?>


                    </div>

                </div>

                <aside>
                    <div class="achive">
                
                         <ul>
                              <?php dynamic_sidebar('news'); ?>
                         </ul>


                    </div>
                </aside>
            </div>
</div>
        </div>

    </div>
    <!-- inner -->
</main>

<?php get_footer(); ?>