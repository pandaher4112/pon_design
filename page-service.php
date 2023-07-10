<!-- serviceページ -->
<?php get_header(); ?>

<!-- メイン画面 (2023/06/26)  -->
<main class="l-serviceP" id="l-serviceP" >
    <?php
        $args = ['Title'=>'SERVICE','SubTitle'=>'事業案内','Pan1'=>'SERVICE','Link1'=>'service','Pan2'=>'','Link2'=>''];
        get_template_part('template_parts/submv',null,$args); 
     ?>
    <section class="p-servicePage">
        <div class="p-serviceBoxs">
            <div class="p-serviceBox">
                <div class="p-servieBoxImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service01.jpg" alt="WEBサイト制作">
                </div>
                <div class="p-serviceBoxT">
                    <div class="p-serviceBoxTitle">Webサイト制作</div>
                    <div class="p-serviceBoxDescription">新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。<br>
サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。</div>
                </div>
            </div>
            <div class="p-serviceBox">
                <div class="p-servieBoxImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service02.jpg" alt="Webサイト運用">
                </div>
                <div class="p-serviceBoxT">
                    <div class="p-serviceBoxTitle">Webサイト運用</div>
                    <div class="p-serviceBoxDescription">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。
日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。
また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。</div>
                </div>
            </div>
            <div class="p-serviceBox">
                <div class="p-servieBoxImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service03.jpg" alt="アプリ開発">
                </div>
                <div class="p-serviceBoxT">
                    <div class="p-serviceBoxTitle">アプリ開発</div>
                    <div class="p-serviceBoxDescription">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。 開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。</div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template_parts/contact'); ?>
</main>
<?php get_footer(); ?>
