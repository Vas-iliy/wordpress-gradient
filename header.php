
<!DOCTYPE html>
<html lang="ru-Ru"></html>
<head>
    <meta charset="utf-8">
    <title>Gradient.com</title>
    <link rel="shortcut icon" href="./img/srdgnw.png" type="image/png">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<? wp_head(); ?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?=home_url('/');?>">
        <img class="logo" src="<?=get_template_directory_uri()?>/assets/img/logo.png" alt="logo"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="main-navbar">
	    <? wp_nav_menu(array(
			    'theme_location' => 'header-menu',
			    'container' => false,
			    'menu_class' => 'navbar-nav',
			    'walker' => new Law_Header_Memu
		    )
	    ) ?>
    </div>
</nav>