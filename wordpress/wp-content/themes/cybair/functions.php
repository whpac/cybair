<?php
add_action('after_setup_theme', 'cybair_theme_support');

function cybair_theme_support(){
    add_theme_support('post-thumbnails');
}

function cybair_date_list_format(){
    if(date('Yz') == get_the_time('Yz')){
        the_time('H:i');
    }else{
        the_date('d.m.Y'); 
    }
}

function cybair_archive_title($title = '') {
    if(is_home()){
        $title = 'Wszystkie wpisy';
    }elseif(is_category()){
        $title = single_cat_title('', false);
    }elseif(is_tag()){
        $title = single_tag_title('', false);
    }elseif(is_author()){
        $title = get_the_author();
    }elseif(is_post_type_archive()){
        $title = post_type_archive_title('', false);
    }elseif(is_tax()){
        $title = single_term_title('', false);
    }

    return $title;
}
 
add_filter('get_the_archive_title', 'cybair_archive_title');

function cybair_menus() {
    $locations = array(
        'primary' => 'Menu główne',
        'activities' => 'Sekcja „Co robimy”'
    );

    register_nav_menus($locations);
}

add_action('init', 'cybair_menus');

function cybair_echo_fnumber($number, $base, $f1, $f2, $f5 = null, $ff = null){
    echo($number.' '.$base.cybair_format_number($number, $f1, $f2, $f5, $ff));
}

function cybair_format_number($n, $f1, $f2, $f5 = null, $ff = null){
    if($n == 1) return $f1;
    $f5 = !is_null($f5) ? $f5 : $f2;
    $ff = !is_null($ff) ? $ff : $f5;

    if($n % 1 != 0) return $ff;

    $n1 = $n % 10;
    $n2 = (($n % 100) - $n1) / 10;

    if(($n1 == 2 || $n1 == 3 || $n1 == 4) && $n2 != 1) return $f2;

    return $f5;
}

function cybair_excerpt_length( $length ) {
    return 25;
}
add_filter('excerpt_length', 'cybair_excerpt_length', 999);
?>