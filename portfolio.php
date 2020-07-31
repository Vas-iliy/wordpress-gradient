<?php
/*
Template Name: Портфолио
 */
?>

<? get_header(); ?>
<section class="filter">
	<div class="container">
		<div class="row justify-content-lg-between justify-content-around">
			<div class="filter__buttons col-lg-8">
				<button class="filter__button">Cайты</button>
				<button class="filter__button">Фирменный стиль</button>
				<button class="filter__button">Презентации</button>
				<button class="filter__button">CMM</button>
				<button class="filter__button">   Другое</button>
			</div>
			<button class="filter__button btn-red">   Все</button>
		</div>
		<div class="filter__underline"></div>
	</div>
</section>
<section class="block_cases">
	<div class="container">
		<div class="cases__item">
			<div class="row">
				<div class="col-lg-7 col-sm-12 col-12 p-0">
					<div class="cases__item__left"><img class="cases__item__left__image" src="./img/girls.jpg"/></div>
				</div>
				<div class="cases__item__right col-lg-5 col-sm-12 col-12 p-0">
					<div class="case__description">
						<div class="case__description__info">
							<h2 class="cases_item_name">Название</h2>
							<ul class="cases_item_specialisations">
								<li class="specialisations__item">UX</li>
								<li class="specialisations__item">backend</li>
								<li class="specialisations__item">design</li>
							</ul>
						</div>
						<button class="btn-show">
							<h4 class="btn-title">  Смотреть кейс</h4><img class="btn-image" src="./img/arrow_black.svg"/>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="block_cases">
	<div class="container">
		<div class="cases__item">
			<div class="row">
				<div class="col-lg-7 col-sm-12 col-12 p-0">
					<div class="cases__item__left"><img class="cases__item__left__image" src="./img/girls.jpg"/></div>
				</div>
				<div class="cases__item__right col-lg-5 col-sm-12 col-12 p-0">
					<div class="case__description">
						<div class="case__description__info">
							<h2 class="cases_item_name">Название</h2>
							<ul class="cases_item_specialisations">
								<li class="specialisations__item">UX</li>
								<li class="specialisations__item">backend</li>
								<li class="specialisations__item">design</li>
							</ul>
						</div>
						<button class="btn-show">
							<h4 class="btn-title">  Смотреть кейс</h4><img class="btn-image" src="./img/arrow_black.svg"/>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="block_cases">
	<div class="container">
		<div class="cases__item">
			<div class="row">
				<div class="col-lg-7 col-sm-12 col-12 p-0">
					<div class="cases__item__left"><img class="cases__item__left__image" src="./img/girls.jpg"/></div>
				</div>
				<div class="cases__item__right col-lg-5 col-sm-12 col-12 p-0">
					<div class="case__description">
						<div class="case__description__info">
							<h2 class="cases_item_name">Название</h2>
							<ul class="cases_item_specialisations">
								<li class="specialisations__item">UX</li>
								<li class="specialisations__item">backend</li>
								<li class="specialisations__item">design</li>
							</ul>
						</div>
						<button class="btn-show">
							<h4 class="btn-title">  Смотреть кейс</h4><img class="btn-image" src="./img/arrow_black.svg"/>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="block_cases">
	<div class="container">
		<div class="cases__item">
			<div class="row">
				<div class="col-lg-7 col-sm-12 col-12 p-0">
					<div class="cases__item__left"><img class="cases__item__left__image" src="./img/girls.jpg"/></div>
				</div>
				<div class="cases__item__right col-lg-5 col-sm-12 col-12 p-0">
					<div class="case__description">
						<div class="case__description__info">
							<h2 class="cases_item_name">Название</h2>
							<ul class="cases_item_specialisations">
								<li class="specialisations__item">UX</li>
								<li class="specialisations__item">backend</li>
								<li class="specialisations__item">design</li>
							</ul>
						</div>
						<button class="btn-show">
							<h4 class="btn-title">  Смотреть кейс</h4><img class="btn-image" src="./img/arrow_black.svg"/>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="project-form">
	<div class="container">
		<form>
			<div class="row">
				<div class="col-lg-8">
					<h1 class="project-form__title">Начать работу над проектом</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<input class="project-form__input" type="text" placeholder="Имя" required="true"/>
				</div>
				<div class="col-lg-6">
					<input class="project-form__input" type="text" placeholder="Телефон" required="true"/>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<input class="project-form__input" type="text" placeholder="Email" required="true"/>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<h1 class="project-form__about">О проекте</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<textarea class="project-form__textarea" name="comment" placeholder="Опишите задачу"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<input class="project-form__input" type="text" placeholder="Бюджет" required="true"/>
				</div>
				<div class="col-lg-6">
					<input class="project-form__input" type="text" placeholder="Срок" required="true"/>
				</div>
			</div>
			<div class="row">
				<input class="project-form__input" type="file" name="f"/>
			</div>
			<div class="row justify-content-between">
				<div class="col-lg-4 p-0">
					<p>Нажав на кнопку, соглашаюсь на обработку персональных данных</p>
				</div>
				<div class="col-lg-4 p-0">
					<button class="project-form__btn">Отправить</button>
				</div>
			</div>
		</form>
	</div>
</section>

<? get_footer(); ?>
