<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title('|',true, 'left'); ?></title>
    <meta name="description" content="PON DESIGN">
    <?php wp_head(); ?>
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/webpage">
    <!--header   -->
    <header id="header" class="header">
        <div class="bl-header">
            <a href="../" class="bl-headerLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="PON DESIGN">
            </a>
        </div>
        <div>
            <nav class="bl-headerNav">
                <?php
                    $args = array(
                        'menu'              => 'header',
                        'menu_class'        => 'bl-headerNavLists', //メニューを構成するul要素につけるCSSクラス名
                        'container'         => 'nav', //ulを囲う要素を指定、 div or nav なしの場合にはfalse
                        'depth'             => 1,  //何階層まで表示するか、0は全階層、1は現メニューまで、2は子メニューまで
                        'theme_location'    => 'header', //メニューの位置を指定
                    );
                    wp_nav_menu($args);
                ?>
            </nav>
        </div>
        <div class="bl-humbergarMenu">
            <div class="openBtn">
                <span></span><span></span><span></span>
            </div>
        </div>
        <div class="bl-humbergarMenuNav">
            <?php
                    $args = array(
                        'menu'              => '',
                        'menu_class'        => 'bl-humbergarMenuNavLists', //メニューを構成するul要素につけるCSSクラス名
                        'container'         => 'div', //ulを囲う要素を指定、 div or nav なしの場合にはfalse
                        'depth'             => 1,  //何階層まで表示するか、0は全階層、1は現メニューまで、2は子メニューまで
                        'theme_location'    => 'humbarger_header', //メニューの位置を指定(function.phpにてメニューを作る)
                    );
                    wp_nav_menu($args);
            ?>
        </div>
    </header>