<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$num = abs((int)$atts['posts_number']) ? $atts['posts_number'] : 1;
?>

<?
$query = new WP_Query(array(
        'post_type' => 'post',
	'post_per_page' => $num
));
?>

<div class="fw-row">
    <?if($query->have_posts()): while ($query->have_posts()): $query->the_post();?>
        <section class="block_cases">
            <div class="container">
                <div class="cases__item">
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 col-12 p-0">
                            <div class="cases__item__left"><img class="cases__item__left__image" src="<?=get_the_post_thumbnail_url()?>"/></div>
                        </div>
                        <div class="cases__item__right col-lg-5 col-sm-12 col-12 p-0">
                            <div class="case__description">
                                <div class="case__description__info">
                                    <h2 class="cases_item_name"><? the_title(); ?></h2>
                                    <ul class="cases_item_specialisations">
                                        <li class="specialisations__item">UX</li>
                                        <li class="specialisations__item">backend</li>
                                        <li class="specialisations__item">design</li>
                                    </ul>
                                </div>
                                <button class="btn-show">
                                    <h4 class="btn-title">  Смотреть кейс</h4><img class="btn-image" src="<?=get_template_directory_uri()?>/assets/img/arrow_black.svg"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-lg-4 col-md-4">
            <div class="fh5co-blog animate-box">
                <a href="<? the_permalink(); ?>">
                    <img src="<?=get_the_post_thumbnail_url()?>" alt="">
                </a>
                <div class="blog-text">
                    <h3><a href="<? the_permalink(); ?>"><? the_title(); ?>n</a></h3>
                    <p><? the_content(''); ?></p>
                    <a href="<? the_permalink(); ?>" class="btn btn-primary"><? _e('Read More', 'law'); ?></a>
                </div>
            </div>
        </div>
    <?endwhile;?>
    <?endif;?>
    <? wp_reset_postdata(); ?>
</div>

