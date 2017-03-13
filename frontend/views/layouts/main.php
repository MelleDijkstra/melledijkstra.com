<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\models\Category;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

$this->title = $this->title ? $this->title : 'An interesting page';

// Set canonical for SEO
$this->registerLinkTag(['rel' => 'canonical', 'href' => \yii\helpers\Url::canonical()]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#337ab7">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) . ((isset(Yii::$app->params['titleSuffix'])) ? Yii::$app->params['titleSuffix'] : '') ?></title>
    <?php $this->head() ?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-61555186-3', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body onload="$('#page-loader-wrap').fadeOut(500);">
<div id="page-loader-wrap">
    <div class="loader"></div>
</div>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    //    NavBar::begin([
    //        'brandLabel' => 'Melle Dijkstra',
    //        'brandUrl' => Yii::$app->homeUrl,
    //        'options' => [
    //            'class' => 'mel-navbar',
    //        ],
    //    ]);
    //    $menuItems = [
    //        [
    //            'label' => '<span class="mdi mdi-buffer"></span> '.Yii::t('project', 'Projects'),
    //            'url' => ['/projects'],
    //            'active' => \Yii::$app->controller->id == 'projects',
    //        ],
    //        [
    //            'label' => '<span class="mdi mdi-book-open-page-variant"></span> '.Yii::t('guide', 'Guides'),
    //            'url' => ['/guides'],
    //            'active' => \Yii::$app->controller->id == 'guides',
    //        ],
    //        [
    //            'label' => '<span class="mdi mdi-account-card-details"></span> '.Yii::t('remaining', 'About Me'),
    //            'url' => ['/about'],
    //            'active' => \Yii::$app->request->url == '/about',
    //        ],
    //    ];
    //    echo Nav::widget([
    //        'options' => ['class' => 'navbar-nav navbar-right'],
    //        'encodeLabels' => false,
    //        'items' => $menuItems,
    //    ]);
    //    NavBar::end();
    ?>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <h1 class="text-center"><a class="no-link" href="/">Melle Dijkstra<span class="brand-dot">.</span></a><br/>
                <small>A place of thought</small>
            </h1>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <h3>Categories</h3>
            <div class="margin-tb-10">
                <?= implode(', ', Category::find()->select('name')->column()); ?>
            </div>
            <div class="text-lg text-center">
                <span class="mdi mdi-facebook"></span>
                <span class="mdi mdi-twitter"></span>
                <span class="mdi mdi-linkedin"></span>
                <span class="mdi mdi-dribbble"></span>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="visible-xs">
                <button type="button" class="toggler navbar-toggle collapsed"
                        onclick="$('#wrapper').toggleClass('toggled');" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
