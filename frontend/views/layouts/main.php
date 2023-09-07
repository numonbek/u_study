<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>


    <div class="wrapper-page" data-smooth-scrolling="home">
        <div class="mobile_menu">
            <div class="row justify-content-between">
                <div class="col-6">
                    <span class="color_logo_blue m-menu">Меню</span>
                </div>
                <div class="">
                    <img src="/web/icons/x.svg" alt="">
                </div>
            </div>
            <div class="header__lang_mobile">
                <div class="lang">
                    <div class="lang-toggle">
                        <span class="lang__icon square--24">
                            <svg class="lang__icon-svg w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#globe"/>
                            </svg>
                        </span>
                        <span class="lang__name">
                            Русский
                        </span>
                        <span class="lang__icon square--24">
                            <svg class="lang__icon w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#arrow-down"/>
                            </svg>
                        </span>
                    </div>
                    <ul class="lang-menu">
                        <li class="lang-list"><a href="#">ru</a></li>
                        <li class="lang-list"><a href="#">eng</a></li>
                        <li class="lang-list"><a href="#">uzb</a></li>
                    </ul>
                </div>
            </div>
            <div class="header__nav_mobile">
                <nav class="nav">
                    <ul class="nav__block">
                        <li class="nav__item"><a class="nav__link" href="#">Главное</a></li>
                        <li class="nav__item"><a class="nav__link" href="/countries">Страны</a></li>
                        <li class="nav__item"><a class="nav__link" href="/about_university">Университеты</a></li>
                        <li class="nav__item"><a class="nav__link" href="/about_us">О нас</a></li>
                        <li class="nav__item"><a class="nav__link" href="/services">Наши услуги</a></li>
                        <li class="nav__item"><a class="nav__link" href="/grant">Гранты</a></li>
                        <li class="nav__item"><a class="nav__link" href="/news">Новости и полезное</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__info">
                <div class="footer__info__item info__location">
                    <div class="tmp_info">
                        <div class="tmp_info__icon">
                            <div class="round">
                                <svg class="round__back w-h-100">
                                    <use xlink:href="./assets/icons/sprite-svg.svg#social-back"></use>
                                </svg>
                                <svg class="round__center w-h-100">
                                    <use xlink:href="./assets/icons/sprite-svg.svg#location"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="tmp_info__desc">
                            г. Ташкент, улица Навоий, 65
                        </div>
                    </div>
                </div>
                <div class="footer__info__item info__phone">
                    <div class="tmp_info">
                        <div class="tmp_info__icon">
                            <div class="round">
                                <svg class="round__back w-h-100">
                                    <use xlink:href="./assets/icons/sprite-svg.svg#social-back"></use>
                                </svg>
                                <svg class="round__center w-h-100">
                                    <use xlink:href="./assets/icons/sprite-svg.svg#phone"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="tmp_info__desc">
                            +998 90 000 11 22
                        </div>
                    </div>
                </div>
                <div class="footer__info__item info__location">
                    <div class="tmp_info">
                        <div class="tmp_info__icon">
                            <div class="round">
                                <svg class="round__back w-h-100">
                                    <use xlink:href="./assets/icons/sprite-svg.svg#social-back"></use>
                                </svg>
                                <svg class="round__center w-h-100">
                                    <use xlink:href="./assets/icons/sprite-svg.svg#mail"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="tmp_info__desc">
                            info@ustudent.uz
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__socials">
                <div class="footer__socials__title">Мы в соц сетях</div>
                <div class="socials">
                    <div class="socials__item square--32">
                        <div class="round">
                            <svg class="round__back w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#social-back"/>
                            </svg>
                            <svg class="round__center w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#facebook"/>
                            </svg>
                        </div>
                    </div>
                    <div class="socials__item square--32">
                        <div class="round">
                            <svg class="round__back w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#social-back"/>
                            </svg>
                            <svg class="round__center w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#instagram"/>
                            </svg>
                        </div>
                    </div>
                    <div class="socials__item square--32">
                        <div class="round">
                            <svg class="round__back w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#social-back"/>
                            </svg>
                            <svg class="round__center w-h-100">
                                <use xlink:href="./assets/icons/sprite-svg.svg#telegram"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- data-scrollbar -->
        <header class="header">
            <div class="info">
                <div class="info__block container">
                    <div class="info__item info__location">
                        <div class="tmp_info">
                            <div class="tmp_info__icon">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#location"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="tmp_info__desc">
                                г. Ташкент, улица Навоий, 65
                            </div>
                        </div>
                    </div>
                    <div class="info__item info__phone">
                        <div class="tmp_info">
                            <div class="tmp_info__icon">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#phone"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="tmp_info__desc">
                                +998 90 000 11 22
                            </div>
                        </div>
                    </div>
                    <div class="info__item info__location">
                        <div class="tmp_info">
                            <div class="tmp_info__icon">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#mail"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="tmp_info__desc">
                                info@ustudent.uz
                            </div>
                        </div>
                    </div>
                    <div class="info__item info__socials">
                        <div class="socials">
                            <div class="socials__item square--32">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#facebook"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="socials__item square--32">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#instagram"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="socials__item square--32">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#telegram"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__container container">
                <a href="/" class="header__logo">
                    <svg class="header__logo-svg w-h-100">
                        <use xlink:href="/icons/sprite-svg.svg#logo"/>
                    </svg>
                </a>
                <div class="header__nav">
                    <nav class="nav">
                        <ul class="nav__block">
                            <li class="nav__item"><a class="nav__link" href="/">Главное</a></li>
                            <li class="nav__item"><a class="nav__link" href="/site/countries">Страны</a></li>
                            <li class="nav__item"><a class="nav__link" href="/site/universities">Университеты</a></li>
                            <li class="nav__item"><a class="nav__link" href="/site/about">О нас</a></li>
                            <li class="nav__item"><a class="nav__link" href="/site/services">Наши услуги</a></li>
                            <li class="nav__item"><a class="nav__link" href="/site/grant">Гранты</a></li>
                            <li class="nav__item"><a class="nav__link" href="/site/news">Новости и полезное</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__lang">
                    <div class="lang">
                        <div class="lang-toggle">
                            <span class="lang__icon square--24">
                                <svg class="lang__icon-svg w-h-100">
                                    <use xlink:href="/icons/sprite-svg.svg#globe"/>
                                </svg>
                            </span>
                            <span class="lang__name">
                                Русский
                            </span>
                            <span class="lang__icon square--24">
                                <svg class="lang__icon w-h-100">
                                    <use xlink:href="/icons/sprite-svg.svg#arrow-down"/>
                                </svg>
                            </span>
                        </div>
                        <ul class="lang-menu">
                            <li class="lang-list"><a href="#">ru</a></li>
                            <li class="lang-list"><a href="#">eng</a></li>
                            <li class="lang-list"><a href="#">uzb</a></li>
                        </ul>
                    </div>
                </div>
                <div class="burger">
                    <img src="assets/icons/menu.svg" alt="">
                </div>

            </div>
        </header>

        <!--    <div class="container">-->
        <!--        --><? //= Breadcrumbs::widget([
        //            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        //        ]) ?>
        <!--        --><?//= Alert::widget() ?>
        <?= $content ?>
        <!--    </div>-->


        <footer class="footer">
            <div class="footer__block container">
                <div class="footer__left footer__company">
                    <div class="footer__company__logo header__logo">
                        <svg class="footer__company__logo-svg header__logo-svg w-h-100">
                            <use xlink:href="/icons/sprite-svg.svg#logo-white"/>
                        </svg>
                    </div>
                    <div class="footer__company__title">
                        Вас обслуживает OOO “uStudent Consult”
                    </div>
                    <div class="footer__company__inc">
                        <svg class="footer__company__inc-svg square--18">
                            <use xlink:href="/icons/sprite-svg.svg#inc"/>
                        </svg>
                        Все права защищены - <?= date('Y') ?>
                    </div>
                </div>
                <div class="footer__right">
                    <div class="footer__nav">
                        <nav class="nav">
                            <ul class="nav__block">
                                <li class="nav__item"><a class="nav__link" href="#">Главное</a></li>
                                <li class="nav__item"><a class="nav__link" href="/countries">Страны</a></li>
                                <li class="nav__item"><a class="nav__link" href="/about_university">Университеты</a>
                                </li>
                                <li class="nav__item"><a class="nav__link" href="/about_us">О нас</a></li>
                                <li class="nav__item"><a class="nav__link" href="/services">Наши услуги</a></li>
                                <li class="nav__item"><a class="nav__link" href="/grant">Гранты</a></li>
                                <li class="nav__item"><a class="nav__link" href="/news">Новости и полезное</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer__info">
                        <div class="footer__info__item info__location">
                            <div class="tmp_info">
                                <div class="tmp_info__icon">
                                    <div class="round">
                                        <svg class="round__back w-h-100">
                                            <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                        </svg>
                                        <svg class="round__center w-h-100">
                                            <use xlink:href="/icons/sprite-svg.svg#location"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="tmp_info__desc">
                                    г. Ташкент, улица Навоий, 65
                                </div>
                            </div>
                        </div>
                        <div class="footer__info__item info__phone">
                            <div class="tmp_info">
                                <div class="tmp_info__icon">
                                    <div class="round">
                                        <svg class="round__back w-h-100">
                                            <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                        </svg>
                                        <svg class="round__center w-h-100">
                                            <use xlink:href="/icons/sprite-svg.svg#phone"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="tel:998900001122" class="tmp_info__desc">
                                    +998 90 000 11 22
                                </a>
                            </div>
                        </div>
                        <div class="footer__info__item info__location">
                            <div class="tmp_info">
                                <div class="tmp_info__icon">
                                    <div class="round">
                                        <svg class="round__back w-h-100">
                                            <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                        </svg>
                                        <svg class="round__center w-h-100">
                                            <use xlink:href="/icons/sprite-svg.svg#mail"/>
                                        </svg>
                                    </div>
                                </div>
                                <a href="emailto:info@ustudent.uz" class="tmp_info__desc">
                                    info@ustudent.uz
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__socials">
                        <div class="footer__socials__title">Мы в соц сетях</div>
                        <div class="socials">
                            <div class="socials__item square--32">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#facebook"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="socials__item square--32">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#instagram"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="socials__item square--32">
                                <div class="round">
                                    <svg class="round__back w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#social-back"/>
                                    </svg>
                                    <svg class="round__center w-h-100">
                                        <use xlink:href="/icons/sprite-svg.svg#telegram"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
