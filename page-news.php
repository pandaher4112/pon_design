<!-- Newsページ -->
<?php get_header(); ?>
<?php
// 取得したい内容を配列に記載します（不要箇所は省略可）
$args = array(
    'post_type' => 'post',  //投稿に対して処理を実行
	'posts_per_page'   => -1, // 読み込みしたい記事数（全件取得時は-1）
	// 'category'         => '42', // 読み込みしたいカテゴリID（複数の場合は '1,2'）
	'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
	'order'            => 'ASC', // 昇順(ASC)か降順か(DESC）
	// 'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切）
);
// 配列で指定した内容で、記事情報を取得
$wp_query = new WP_Query( $args );
?>

<!-- メイン画面 (2023/06/26)  -->
<main class="p-newspage" id="p-newspae" >
    <?php get_template_part('template_parts/submv'); ?>

    <div class="bl-news">
        <div class="bl-newsBox">
            <div class="bl-newsBoxCards">
<?php
// 取得した記事情報の表示
if ( $wp_query -> have_posts() ): // 記事情報がある場合はforeachで記事情報を表示
    while ( $wp_query -> have_posts() ){
        $wp_query -> the_post();        //記事のセットおよび、次の記事への移動
?>
        <ul class="bl-newsBoxCard">
            <li class="el-newsBoxCardDate"><?php echo the_date('Y.m.d') ?></li>
            <li class="el-newsBoxCardIcon"><?php echo  get_the_category()[0]->name ?></li>
            <li class="el-newsBoxDescription"><a href='<?php the_permalink(); ?>'><?php echo the_title() ?></a></li>
        </ul>
<?php
    }
else: // 記事情報がなかったら
    ?>
     記事はなし<!-- 記事がない場合の表記 -->
    <?php
endif;
    // 一覧情報取得に利用したループをリセットする
    wp_reset_postdata();
?>
            </div>
        </div>
    </div>
    <?php get_template_part('template_parts/contact'); ?>
</main>
<?php get_footer(); ?>
