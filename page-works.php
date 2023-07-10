<!-- WORKSページ -->
<?php get_header(); ?>

<!-- メイン画面 (2023/06/26)  -->
<main class="l-worksP" id="l-worksP" >
    <!-- TOPイメージの表示 -->
    <?php
        $args = ['Title'=>'WORKS','SubTitle'=>'制作実績','Pan1'=>'WORKS','Link1'=>'works','Pan2'=>'','Link2'=>''];
        get_template_part('template_parts/submv',null,$args); 
     ?>
     <!-- メインページの表示 -->
    <section class="p-worksPagep">
        <div class="p-worksBoxsp">
            <div class="p-worksBoxp">
                <a href="#">
                    <div class="p-worksBoxpImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/works/smoothiesta.jpg" alt="Smoothiesta 様">
                    </div>
                    <div class="p-worksBoxpT">Smoothiesta 様</div>
                </a>
            </div>
            <div class="p-worksBoxp">
                <a href="#">
                    <div class="p-worksBoxpImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/works/web-conference.jpg" alt="Web Conference 様">
                    </div>
                    <div class="p-worksBoxpT">Web Conference 様</div>
                </a>
            </div>
            <div class="p-worksBoxp">
                <a href="#">
                    <div class="p-worksBoxpImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/works/lamina.jpg" alt="LAMINA 様">
                    </div>
                    <div class="p-worksBoxpT">LAMINA 様</div>
                </a>
            </div>
            <div class="p-worksBoxp">
                <a href="#">
                    <div class="p-worksBoxpImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/works/citylab.jpg" alt="CITYLab 様">
                    </div>
                    <div class="p-worksBoxpT">CITYLab 様</div>
                </a>
            </div>
            <div class="p-worksBoxp">
                <a href="#">
                    <div class="p-worksBoxpImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/works/tabilog.jpg" alt="TABILOG 様">
                    </div>
                    <div class="p-worksBoxpT">TABILOG 様</div>
                </a>
            </div>
        </div>
    </section>
    <?php get_template_part('template_parts/contact'); ?>
</main>
<?php get_footer(); ?>
