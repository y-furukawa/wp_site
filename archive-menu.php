<?php get_header(); ?>
    <main>
        <div class="inner">
            <div class="menu-list">
                <h2 class="nomal_title">Curry</h2>
                <p>Regular Menu</p>
                <div class="menu-line1">

                                 <?php $regular =new WP_Query([
                    'post_type'=>'menu',
                    'posts_per_page' => 6 ,
                    'tax_query'=>[
                        [
                            'taxonomy'=>'curry',     //カスタムタクソノミーを作ったときの名前
                            'field'=>'slug',        //スラッグで調べる
                            'terms'=>'regular_menu'    //何がほしいのか
                                        ]
                                ]

                            ]);
                            ?>

                                                    <?php if ($regular->have_posts()) : while ($regular->have_posts()) : $regular->the_post();?>
                                        <div class="menu-single">
                                            <a href="<?php the_permalink();?>"><p><?php the_post_thumbnail('full'); ?></p></a>
                                           <h2> <?php the_title(); ?></h2>
                                            <p><?php echo post_custom('price') ?></p>
                                        </div>

                                                           <?php endwhile;endif; ?>
                                                           <?php wp_reset_postdata(); ?>

                       </div>


                <p class="border"></p>
                <p>Season Menu</p>
                <div class="menu-line1">

                <?php $season =new WP_Query([
                    'post_type'=>'menu',
                    'posts_per_page' => 3 ,
                    'tax_query'=>[
                        [
                            'taxonomy'=>'curry',     //カスタムタクソノミーを作ったときの名前
                            'field'=>'slug',        //スラッグで調べる
                            'terms'=>'season-menu'    //何がほしいのか
                                        ]
                                ]

                            ]);
                            ?>

                            <?php if ($season->have_posts()) : while ($season->have_posts()) : $season->the_post();?>
                            <div class="menu-single">
                            <p><a href="<?php the_permalink();?>"><?php the_post_thumbnail('full'); ?></a></p>
                                       <h2>     <?php the_title(); ?></h2>
                                            <p><?php echo post_custom('price') ?></p>
                                                </div>
                            <?php endwhile;endif; ?>

                        </div>








                <h2 class="nomal_title">Side Menu</h2>
                <div class="menu-line1">

                <?php $side =new WP_Query([
                    'post_type'=>'menu',
                    'posts_per_page' => 3 ,
                    'tax_query'=>[
                        [
                            'taxonomy'=>'curry',     //カスタムタクソノミーを作ったときの名前
                            'field'=>'slug',        //スラッグで調べる
                            'terms'=>'side_menu'    //何がほしいのか
                                        ]
                                ]

                            ]);
                            ?>

<?php if ($side->have_posts()) : while ($side->have_posts()) : $side->the_post();?>
                        <div class="menu-single">
                    <p><a href="<?php the_permalink();?>"><?php the_post_thumbnail('full'); ?></a></p>
                                      <h2>      <?php the_title(); ?></h2>
                                            <p><?php echo post_custom('price') ?></p>
                                                </div>

<?php endwhile;endif; ?>

</div>






        </div>
        <!-- inner -->
    </main>
    <?php get_footer(); ?>