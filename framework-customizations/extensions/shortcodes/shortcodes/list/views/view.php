<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$arrs = explode( ';', $atts['text'] )
?>
<div class="col-lg-6 col-12">
    <ul class="stages__description">
        <?foreach ($arrs as $arr):?>
        <li class="stages__description__item"> <?=$arr?></li>
        <?endforeach;?>
    </ul>
</div>

