<?php
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

?>

<div class="collapse navbar-collapse">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar navbar-inverse',
            'role' => 'banner',
        ],
        'brandLabel' => 'logo',
        'brandUrl' => Yii::$app->homeUrl,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-right'],
        'items' => [
            ['label' => Yii::t('frontend', 'NAV_HOME'), 'url' => ['/site/index'], 'options' => ['class' => 'active']],
            ['label' => Yii::t('frontend', 'NAV_PAGES'), 'url' => ['/site/coming-soon'], 'options' => ['class' => ''],
                'items' => [
                    ['label' => Yii::t('frontend', 'NAV_ABOUT'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_ABOUT2'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_SERVICES'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_PRICING'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_CONTACT_US'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_CONTACT_US_2'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_404_ERROR'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_COMING_SOON'), 'url' => ['/site/coming-soon']],
                ],
            ],
            ['label' => Yii::t('frontend', 'NAV_BLOG'), 'url' => ['/site/coming-soon'], 'options' => ['class' => ''],
                'items' => [
                    ['label' => Yii::t('frontend', 'NAV_BLOG_DEFAULT'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_TIMELINE_BLOG'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_2_COLUMNS_RIGHT_SIDEBAR'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_1_COLUMN_LEFT_SIDEBAR'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_BLOG_MASONARY'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_BLOG_DETAILS'), 'url' => ['/site/coming-soon']],
                ],
            ],
            ['label' => Yii::t('frontend', 'NAV_PORTFOLIO'), 'url' => ['/site/coming-soon'], 'options' => ['class' => ''],
                'items' => [
                    ['label' => Yii::t('frontend', 'NAV_PORTFOLIO_DEFAULT'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_ISOTOPE_3_COLUMNS_RIGHT_SIDEBAR'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_3_COLUMNS_RIGHT_SIDEBAR'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_3_COLUMNS_LEFT_SIDEBAR'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_2_COLUMNS'), 'url' => ['/site/coming-soon']],
                    ['label' => Yii::t('frontend', 'NAV_PORTFOLIO_DETAILS'), 'url' => ['/site/coming-soon']],
                ],
            ],
            ['label' => Yii::t('frontend', 'NAV_SHORTCODES'), 'url' => ['/site/coming-soon']],
        ],
    ]);

    NavBar::end();
    ?>
</div>