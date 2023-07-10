<!-- COMPANYページ -->
<?php get_header(); ?>

<!-- メイン画面 (2023/06/26)  -->
<main class="l-companysP" id="l-companysP" >
    <!-- TOPイメージの表示 -->
    <?php
        $args = ['Title'=>'COMPANY','SubTitle'=>'私たちについて','Pan1'=>'COMPANY','Link1'=>'company','Pan2'=>'','Link2'=>''];
        get_template_part('template_parts/submv',null,$args); 
     ?>
     <!-- メインページの表示 -->
     <section class="l-company" id="l-company">
        <!-- 背景 -->
        <div class="bl-company">
            <div class="p-campanyMessegeT">メッセージ</div>
            <div class="el-companyMessege">
                <span class="bl-companyCatch">サイトのゴール = 
                <br class="sepBr">
                夢を叶えること</span>
            </div>
            <p class="el-companyDescription">お客様の夢を叶えること。<br>
                それがWebサイトのゴールであり、<br class="sepBr">私たちが目指すことです。<br>
                だからこそちゃんと成果を出すサイトを<br class="sepBr">全力でお作りします。<br>
                お客様の笑顔を見たい。<br>
                夢を実現する手助けをさせてください。</p>
        </div>
        <div class="p-greetBox">
            <div class="p-greetBoxImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ceo.jpg" alt="社長挨拶">
            </div>
            <div class="p-greetBoxText">
                <p>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>
                代表取締役社長　猫山ポン太郎
                </p>
            </div>
        </div>
    </section>
    <section class="p-companyoutline">
        <div class="p-companyoutlineBox">
            <p class="p-campanyMessegeT">会社概要</p>
        </div>
        <table class="p-table">
            <tbody>
                <tr>
                    <th>社名</th>
                    <td>株式会社PON DESIGN</td>
                </tr>
                <tr>
                    <th >設立</th>
                    <td>2025.02.10</td>
                </tr>
                <tr>
                    <th>代表取締役</th>
                    <td>猫山ポン太郎</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>1,000,000円</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒555-5555 東京都千代田区 ポンビルディング 606</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="p-access">
            <div class="p-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6481.685644184434!2d139.763694!3d35.680872!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1688375069780!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <a href="#" class="p-accesslink">Google mapで見る</a>
        </div>
    </section>
    <?php get_template_part('template_parts/contact'); ?>
</main>
<?php get_footer(); ?>
