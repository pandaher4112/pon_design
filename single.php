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
                <div class="sns">
                    <ul class="snsList">
                        <li class="snsbtn_good">
                            <div class="fb-like" data-href="http://localhost:3000/news_link1/" data-width="90" data-layout="" data-action="" data-size="" data-share="true"></div>
                        </li>
                        <!-- <li class="snsbtn_facebook"><i class="fa fa-twitter"></i>シェア</li> -->
                        <li class="snsbtn_twitter "><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-lang="ja" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                        <li class="snsbtn_bibook"><a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" data-hatena-bookmark-height="20" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
                        <li class="snsbtn_line"><img src="<?php echo get_template_directory_uri(); ?>/img/LINE_Brand_icon.png" alt="lineアイコン"></li>
                    </ul>
                </div>
                <div class="p-newsEndContbox">
                    <a href="#" class="p-newsEndCont">
                        <span>
                            Web Conference様のサイトを制作いたしました    
                        </span>
                    </a>
                    <a href="#" class="p-newsEndCont">
                        <span>
                        プライバシーマーク取得のお知らせ   
                        </span>
                    </a>
                </div>
                <div class="p-newslistbox">
                    <a href="/news" class="p-newslist">NEWS一覧</a>
                </div>
            </div>
        </div>

        <!-- 共通のコンタクト情報を追加 -->
        <?php get_template_part('template_parts/contact'); ?>

    </main>
<?php get_footer(); ?>
