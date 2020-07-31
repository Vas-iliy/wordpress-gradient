<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$num = abs((int)$atts['posts_number']) ? $atts['posts_number'] : 5;
?>

<?
$query = new WP_Query(array(
        'post_type' => 'post',
	'post_per_page' => $num
));
?>

<section class="filter">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-around">
            <div class="filter__buttons col-lg-8">
	            <? wp_nav_menu(array(
			            'theme_location' => 'rubric-menu',
			            'container' => false,
			            'walker' => new Law_Rubric_Memu
		            )
	            ) ?>
            </div>
        </div>
        <div class="filter__underline"></div>
    </div>
</section>

<?if($query->have_posts()): while ($query->have_posts()): $query->the_post();?>
    <section class="block_cases">
        <div class="container"
        <div class="cases__item">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-12 p-0">
                    <div class="cases__item__left"><img class="cases__item__left__image" src="<?=get_the_post_thumbnail_url()?>"/></div>
                </div>
                <div class="cases__item__right col-lg-5 col-sm-12 col-12 p-0">
                        <div class="case__description__info">
                            <h2 class="cases_item_name"><? the_title(); ?></h2>
                            <ul class="cases_item_specialisations">
                                <? the_tags('', ' '); ?>
                            </ul>
                        </div>
                        <div class="form__case">
                            <form action="<? the_permalink(); ?>">
                                <button class="btn-show">
                                    <h4 class="btn-title">  Смотреть кейс</h4><img class="btn-image" src="<?=get_template_directory_uri()?>/assets/img/arrow_black.svg"/>
                                </button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?endwhile;?>
<?endif;?>
<? wp_reset_postdata(); ?>

