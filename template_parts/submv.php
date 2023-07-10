<?php
    $Title = "";
    $SubTitle = "";
    $Pan1 = "";
    $Link1 ="#";
    $Pan2 ="";
    $Link2 ="#";
    if(isset($args['Title'] )){ $Title=$args['Title']; }
    if( isset($args['SubTitle'] )){ $SubTitle=$args['SubTitle']; }
    if( isset($args['Pan1'] )){ $Pan1=$args['Pan1']; }
    if( isset($args['Link1'] )){ $Link1=$args['Link1']; }
    if( isset($args['Pan2'] )){ $Pan2=$args['Pan2']; }
    if( isset($args['Link2'] )){ $Link2=$args['Link2']; }
?>
    <div class="p-newsbase">
        <div class="bl-commonHeadingBox">
            <p class="el-commonHeadingBoxTitle white"><?= $Title ?></p>
            <p class="el-commonHeadingBoxSubTitle white"><?= $SubTitle?></p>
        </div>
    </div>
    <div class="p-newsPan">
        <div class="p-newsPanLink">
            <span>
                <a href="../">HOME</a> 
            </span>
            <span>
                <a href="<?= $Link1 ?>"><?= $Pan1 ?></a>   
            </span>
            <?php if($Pan2 != ""){ ?>
            <span>
                <a href="<?= $Link2 ?>"><?= $Pan2 ?></a>
            </span>
            <?php } ?>
        </div>
    </div>
