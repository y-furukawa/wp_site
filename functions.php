<?php 
//リンク先作成
function menu_link(){
    return get_post_type_archive_link('menu');
}
function shopping_link(){
    return get_post_type_archive_link('shopping');
}
function store_link(){
    return get_post_type_archive_link('store');
}
function News_link(){
    return get_page_link(get_page_by_path('/news'));
}
function about_link(){
    return get_page_link(get_page_by_path('/about'));
}
function contact_link(){
    return get_page_link(get_page_by_path('/contact'));
}




//bodyのクラスを書き換える
add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
    if (is_page('about')) {     //固定ページがaboutかどうか(スラッグから)調べる
        $classes[] = 'about';
    }


    

    return $classes;     //クラスにaboutを入れて返す
}





//ヴィジェット呼び出し
register_sidebar();

register_sidebar([
    'name'=>'news'
]);





//ボタン用の関数
function the_btn($text,$link){
    echo '<p id="btn"><a href="'.$link.'">'.$text.'</a></p>';
}


//アイキャッチを呼び出す
add_theme_support('post-thumbnails');









?>