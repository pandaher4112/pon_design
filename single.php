<!-- 閲覧投稿サイトを定義 -->
<?php get_header(); ?>
    <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <!-- 投稿の情報を取得 -->
        <?php
            if(mb_strlen($post->post_title)>50) {
            $title= mb_substr($post->post_title,0,50) ;
                // 50文字以上の場合...で表す
                $title = $title . '...';
            } else {
                $title = $post -> post_title;
            }
            $cats = get_the_category();
            $cat = $cats[0];
        ?>

        <!-- topの共通イメージを追加 -->
        <?php 
        $args = ['Title'=>'NEWS','SubTitle'=>'お知らせ','Pan1'=>'NEWS','Link1'=>'news','Pan2'=>$title,'Link2'=>''];
        get_template_part('template_parts/submv',null,$args); 
        ?>

        <!-- 投稿内容を反映 -->
        <div class="bl-single">
            <div class="bl-singleMain">
                <div class="p-singleTitleBox">
                    <!-- 投稿したタイトルを取得 -->
                    <div >
                        <p class="p-singleTitle"><?= $title ?></p>
                    </div>
                    <div class="p-singleBox">
                        <!-- 投稿した日を取得 -->
                        <div class="el-newsBoxCardDate"><?php the_time('Y.m.d'); ?></div>
                        <div class="el-newsBoxCardIcon"><?= $cat -> name ?></div>
                    </div>
                </div>
                <div class="single-content">
                    <?php echo the_content()?>
                </div>
            </div>
        </div>

        <!-- 共通のコンタクト情報を追加 -->
        <?php get_template_part('template_parts/contact'); ?>

    </main>
<?php get_footer(); ?>
