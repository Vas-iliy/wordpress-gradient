<?php if (!defined('FW')) die('Forbidden'); ?>
<? if($data['slides']): ?>
<div class="row align-items-center">
    <div class="col-lg-11">
        <div class="carousel-cont">
            <?foreach ($data['slides'] as $slide): $i = 1;?>
                <div class="carousel-iterator">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="carousel-item__title"><?=$slide['title']?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="carousel-item__subtitle"><?=$slide['desc']?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="carousel-item__description"><?=$slide['extra']['text']?></p>
                        </div>
                    </div>
                    <h1 class="carousel-item__number"><?=$i;?></h1>
                    <?$i++;?>
                </div>
                <? endforeach;?>
        </div>
    </div>
    <div class="col-lg-1">
        <button class="next"><img class="next_img" src="<?=get_template_directory_uri()?>/assets/img/arrow_black.svg" alt="alt"/></button>
    </div>
</div>
<?endif;?>

