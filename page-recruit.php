<!-- RECRUITページ -->
<?php get_header(); ?>

<!-- メイン画面 (2023/06/26)  -->
<main class="bl-recruitP" id="bl-recruitP" >
    <!-- TOPイメージの表示 -->
    <?php
        $args = ['Title'=>'RECRUIT','SubTitle'=>'採用情報','Pan1'=>'RECRUIT','Link1'=>'recruit','Pan2'=>'','Link2'=>''];
        get_template_part('template_parts/submv',null,$args); 
     ?>
     <!-- メッセージページ -->
    <section class="pl-recruitMessege" id="pl-recruitMessege">
        <div class="pl-recruitMessgeTitle">
            <div class="pl-recruteMessegeT">Enjoy Creation for Client</div>
            <div class="pl-recruteMessegeSubT">楽しむ心が良いモノを生む</div>
        </div>
        <p>心を弾ましながら<br>
            夢いっぱいのサイトを作ろう！<br>
            お客様も自分もみんなが幸せになれるように
        </p>
        <!-- 背景 -->
        <div class="p-recruitTBox">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit01.jpg" alt="社長挨拶">
        </div>
    </section>
    <!-- 職種ページ -->
    <section class="p-recruitDec">
        <div class="p-recruitDecT">
            <p>募集中の職種</p>
        </div>
        <div class="p-recruitDecBoxs">
            <div class="p-recruitDecTable">
                <div class="p-recruitDecTitle">
                    <p>Webデザイナー</p>
                </div>
                <table class="p-table">
                    <tbody>
                        <tr>
                            <th>雇用形態</th>
                            <td>正社員</td>
                        </tr>
                        <tr>
                            <th >給与</th>
                            <td>400万円〜600万円（経験・能力を考慮のうえ優遇）</td>
                        </tr>
                        <tr>
                            <th>仕事内容</th>
                            <td>Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>10:00 〜 19:00（実働8時間、休憩1時間）</td>
                        </tr>
                        <tr>
                            <th>応募資格</th>
                            <td><P>PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。<br>
                                実務未経験でも学校や独学で学習した方を歓迎します。<br></p>
                                <ul>
                                    <li>デザインやコーディングを楽しめる方</li>
                                    <li>常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方</li>
                                    <li>お客様と一緒に楽しみながら高い目的を目指せる方</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="#more" class="bl-commonBtn">応募する</a>
                <p>求人サイトへ遷移します</p>
            </div>
        </div>
    </section>
    <section class="p-recruitMovie">
        <div class="p-recruitMovieBox">
            <div class="p-recruitDecT">
                <p>社内ムービー</p>
            </div>
            <div class="p-recruitMovieVideo">
                <iframe width="100%" height="562" src="https://www.youtube.com/embed/VwbnZHvQ3CE" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>        
        </div>
    </section>
    <?php get_template_part('template_parts/contact'); ?>
</main>
<?php get_footer(); ?>
