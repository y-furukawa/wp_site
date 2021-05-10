<?php get_header(); ?>


    <main>
        <div class="inner">

            <div id="contact">
                <div class="contact_text">
                    <p class="subtitle">Contact</p>
                    <p>商品・サービスに関するお問い合わせは、下記の項目にご記入ください</p>
                    <ol>
                        <li class="now">1.入力</li>
                        <li>2.確認</li>
                        <li>3.送信</li>
                    </ol>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content(); ?>
            <?php endwhile;endif; ?>

    </main>
    <?php get_footer(); ?>