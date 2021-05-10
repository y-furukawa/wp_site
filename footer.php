<footer>
        <div class="inner">
            <div class="footer_wrap">
                <div class="footer_left">
                    <ul>
                    <li><a href="<?php echo get_post_type_archive_link('menu');?>">Menu</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('shopping');?>">Shopping</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('store');?>">Store</a></li>
                    <li><a href="<?php echo get_page_link(get_page_by_path('/news'));?>">News</a></li>
                    <li><a href="<?php echo get_page_link(get_page_by_path('/about'));?>">About</a></li>
                    <li><a href="<?php echo get_page_link(get_page_by_path('/contact'));?>">Contact</a></li>
                    </ul>
                </div>
                <div class="footer_right">
                    <p><a href="<?php echo home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/logo.png" alt=""></a></p>
                </div>
            </div>

            <p class="copy"><small>&copy;Sunday Curry</small></p>
        </div>
    </footer>
</body>

</html>