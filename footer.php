    <footer id="footer" class="footer">
    <div class="bl-footer">
        <nav class="bl-footerNavi">
        <?php
                $args = array(
                    'menu'              => 'header',
                    'menu_class'        => 'bl-footerNaviList', //メニューを構成するul要素につけるCSSクラス名
                    'container'         => 'nav', //ulを囲う要素を指定、 div or nav なしの場合にはfalse
                    'depth'             => 1,  //何階層まで表示するか、0は全階層、1は現メニューまで、2は子メニューまで
                    'theme_location'    => 'footer1', //メニューの位置を指定
                );
                wp_nav_menu($args);
            ?>
        </nav>
        <div class="bl-copyright">
            <small>Copyright &copy; <?php bloginfo('name'); ?></small>
        </div>
    </div>
    </footer>
    <div class="bl-topBtn">
        <a href="#" class="bl-topBtnText">↑</a>
    </div>
<!-- contanerの閉じタグ -->
<?php wp_footer(); ?>
</body>
</html>
