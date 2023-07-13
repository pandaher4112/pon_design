<!-- contactページ -->
<?php get_header(); ?>

<!-- メイン画面 (2023/06/26)  -->
<main class="l-contactP" id="l-contactP" >
    <?php
        $args = ['Title'=>'CONTACT','SubTitle'=>'お問い合わせ','Pan1'=>'COTACT','Link1'=>'contact','Pan2'=>'','Link2'=>''];
        get_template_part('template_parts/submv',null,$args); 
     ?>
    <section class="p-contactPage">
        <div class="p-contactBoxs">
            <div class="p-contactBox">
                <p>Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
                <div class="p-contactBoxDecs">
                    <form action="" method="post">
                        <div class="p-contactBoxDec">
                            <div class="p-contactLabels">
                                <div class="p-contactLabel1">お問い合わせ種別</div>
                                <div class="p-contactLabel2">*必須</div>
                            </div>
                            <div class="p-contactkind">
                                <label class="p-kind"><input type="radio" class="form--radio" name="request" value="1"><span>お仕事のご依頼・ご相談</span></label>
                                <label class="p-kind"><input type="radio" class="form--radio" name="request" value="2"><span>お見積りのご依頼</span></label>
                                <label class="p-kind"><input type="radio" class="form--radio" name="request" value="3"><span>採用について</span></label>
                                <label class="p-kind"><input type="radio" class="form--radio" name="request" value="4"><span>その他</span></label>
                            </div>
                        </div>
                        <div class="p-contactBoxDec">
                            <div class="p-contactLabels">
                                <div class="p-contactLabel1">お名前</div>
                                <div class="p-contactLabel2">*必須</div>
                            </div>
                            <input class="form--text" type="text" name="sname">
                        </div>
                        <div class="p-contactBoxDec">
                            <div class="p-contactLabels">
                                <div class="p-contactLabel1">会社名</div>
                                <div class="p-contactLabel2">*必須</div>
                            </div>
                            <input class="form--text" type="text" name="corp">
                        </div>
                        <div class="p-contactBoxDec">
                            <div class="p-contactLabels">
                                <div class="p-contactLabel1">メールアドレス</div>
                                <div class="p-contactLabel2">*必須</div>
                            </div>
                            <input  class="form--text" type="text" name="mail">
                        </div>
                        <div class="p-contactBoxDec">
                            <div class="p-contactLabels">
                                <div class="p-contactLabel1">電話番号</div>
                                <div class="p-contactLabel3">（半角数字ハイフンなし）</div>
                            </div>
                            <input class="form--text" type="text" name="tel">
                        </div>
                        <div class="p-contactBoxDec">
                            <div class="p-contactLabels">
                                <div class="p-contactLabel1">お問い合わせ内容</div>
                                <div class="p-contactLabel2"></div>
                            </div>
                            <textarea class="form--textarea" type="text" name="cont" placeholder="お問い合わせ内容を具体的にご記入くださいませ。"></textarea>
                        </div>
                        <div class="p-contactBoxDec">
                            <div class="p-contactLabels">
                                <div class="p-contactLabel1">PON DESIGNをどちらでお知りになりましたか？</div>
                                <div class="p-contactLabel2">*必須</div>
                            </div>
                            <select name="select" id="" class="form--select">
                                <option value="0">選択してください</option>
                                <option value="1">Google/Yahoo検索</option>
                                <option value="2">SNS</option>
                                <option value="3">ブログ</option>
                                <option value="4">友人や知人</option>
                                <option value="5">その他</option>
                            </select>
                        </div>
                        <button type="submit" class="bl-commonBtn">送信する</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
