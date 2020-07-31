<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
    <?if(!empty($atts['div'])):?>
        <div <?if(!empty($atts['text_wrapper_div'])) echo "class='{$atts['text_wrapper_div']}'"?>>
    <?endif;?>
        <? if(!empty($atts['font_size'])):?>
            <<?=trim($atts['size'])?> <?if(!empty($atts['text_class'])) echo "class = '{$atts['text_class']}'"?>><?=$atts['content']?></<?=trim($atts['size'])?>>
        <?else:?>
            <p <?if(!empty($atts['text_class'])) echo "class = '{$atts['text_class']}'"?>><?=$atts['content']?></p>
        <?endif;?>
    <?if(!empty($atts['div'])):?>
        </div>
    <?endif;?>
