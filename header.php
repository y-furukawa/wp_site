
<?php 
//bodyにidを付与する為の記述
$body_id ="";

if ( is_page('about') ) {
  $body_id  = ' id="'.$post->post_name.'" ';
  
}if(is_home() or is_archive()){
  $body_id = 'id="'.'news'.'" ';
}

if(is_post_type_archive('shopping')){
    $body_id = 'id="'.'shopping'.'" ';
}

if(is_post_type_archive('store')){
    $body_id = 'id="'.'store'.'" ';
}

if(is_post_type_archive('menu')){
    $body_id = 'id="'.'menu'.'" ';
}

if(is_single()){
    $body_id = 'id="'.'news'.'" ';
}

if(is_singular('shopping')){
    $body_id = 'id="'.'shopping'.'" ';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="東京都新宿区に本格カレーのお店Sunday Curryです。都営新宿線、曙橋駅より徒歩3分です。本格インドカレー、野菜カレー、低糖質カレーなど健康に気を使ったメニューを多く揃えています">
    <meta name="keywords" content="カレー,東京,新宿,本格,インド,Sunday Curry">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/common/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/common/css/vegas.min.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/common/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/common/js/vegas.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/common/js/main.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/common/js/jquery.bgswitcher.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <title>Curry Marche カレーと野菜が楽しめる本格インドカレー専門店</title>
    <?php wp_head(); ?>
</head>

<!--<body <?php body_class(); ?> id="<?php //echo esc_attr( $post->post_name ); ?>">-->
<body <?php echo $body_id; ?> <?php body_class(); ?> >
    <header>
        <div class="inner">
            <div class="sp_nav_logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/logo_small.png" alt=""></a></div>
            <nav class="pc_nav cl-effect-9">
                <div class="pc_nav_wrap">
                    <div class="pc_logo">
                        <h1><a href="<?php echo home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/img/logo_yoko.png" alt=""></a></h1>
                    </div>

                    <ul>
                        <li>
                            <a href="<?php echo get_post_type_archive_link('menu');?>">
                                <span>Menu</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_post_type_archive_link('shopping');?>">
                                <span>Shopping</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_post_type_archive_link('store');?>">
                                <span>Store</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(get_page_by_path('/news'));?>">
                                <span>News</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(get_page_by_path('/about'));?>">
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(get_page_by_path('/contact'));?>">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
            <!-- 769pxより大きいとき -->

            <nav class="sp_nav">
                <div class="menu_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <li><a href="<?php echo get_post_type_archive_link('menu');?>">Menu</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('shopping');?>">Shopping</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('store');?>">Store</a></li>
                    <li><a href="<?php echo get_page_link(get_page_by_path('/news'));?>">News</a></li>
                    <li><a href="<?php echo get_page_link(get_page_by_path('/about'));?>">About</a></li>
                    <li><a href="<?php echo get_page_link(get_page_by_path('/contact'));?>">Contact</a></li>
                </ul>
            </nav>
            <!-- 600pxより小さいとき -->
        </div>
        <?php wp_head(); ?>
    </header>

