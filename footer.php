
<footer>
    <div class="container">
        <? get_sidebar('top'); ?>
	    <? get_sidebar(); ?>

        <? get_sidebar('social'); ?>
        <div class="row mt-3 justify-content-between">
            <div class="col-lg-4 col-6">
                <p class="d-block">САНКТ-ПЕТЕРБУРГ, ТИХОРЕЦКИЙ 17Б</p>
            </div>
            <div class="col-lg-2 col-4">
                <div class="socials-block d-flex align-items-center"><a class="socials-href" href="#"><img class="socials one" src="./img/behance.png" alt="behance_link"/></a><a class="socials-href" href="#"><img class="socials two" src="./img/instagram.png" alt="behance_link"/></a></div>
            </div>
        </div>
        <div class="row footer__bottom">
            <div class="col-lg-3 col-4 col-6">
                <ul>
                    <li class="footer-nav"><a href="./about.html">О студии</a></li>
                    <li class="footer-nav"><a href="./portfolio.html">Портфолио</a></li>
                    <li class="footer-nav"><a href="./services.html">Услуги</a></li>
                    <li class="footer-nav"><a href="./blog.html">Блог</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <ul>
                    <li class="footer-nav"><a href="">Сайты</a></li>
                    <li class="footer-nav"><a href="">Фирменный стиль</a></li>
                    <li class="footer-nav"><a href="">Презентации</a></li>
                    <li class="footer-nav"><a href="">Пакетные услуги</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <ul class="cases">
                    <li class="footer-nav"><a href="">Кейс 1</a></li>
                    <li class="footer-nav"><a href="">Кейс 2</a></li>
                    <li class="footer-nav"><a href="">Кейс 3</a></li>
                    <li class="footer-nav"><a href="">Кейс 4</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col md-12 col-sm-12 col-12">
                <form class="form_activation" action="/login" method="POST">
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-6 col-lg-10 p-0">
                            <h3 class="form__title">Будем присылать вам интересные материалы</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-lg-9 col-md-8 col-6 p-0">
                            <input class="footer_email" type="text" name="username" placeholder="Enter Your Username "/>
                        </div>
                        <div class="col-lg-3 col-md-8 col-1 p-0">
                            <button class="form__submit" type="submit"><img src="./img/arrow_black.svg"/></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

<? wp_footer(); ?>

</body>