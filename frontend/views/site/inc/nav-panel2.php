<?php

use yii\helpers\Url;

?>
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?= Url::home() ?>"><?= Yii::t('frontend', 'NAV_HOME') ?> </a></li>
        <li class="dropdown"><a href="#"><?= Yii::t('frontend', 'NAV_PAGES') ?> <i class="fa fa-angle-down"></i></a>
            <ul role="menu" class="sub-menu">
                <li><a href="<?= Url::toRoute(['/page/default/index']) ?>">About</a></li>
                <li><a href="<?= Url::toRoute(['/page/default/about2']) ?>">About 2</a></li>
                <li><a href="<?= Url::toRoute(['/page/default/service']) ?>">Services</a></li>
                <li><a href="<?= Url::toRoute(['/page/default/pricing']) ?>">Pricing</a></li>
                <li><a href="<?= Url::toRoute(['/page/default/contact']) ?>">Contact us</a></li>
                <li><a href="<?= Url::toRoute(['/page/default/contact2']) ?>">Contact us 2</a></li>
                <li><a href="<?= Url::toRoute(['/main/default/404']) ?>">404 error</a></li>
                <li><a href="<?= Url::toRoute(['/main/default/coming-soon']) ?>">Coming Soon</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="<?= Url::toRoute(['blog/index']) ?>"><?= Yii::t('frontend', 'NAV_BLOG') ?> <i class="fa fa-angle-down"></i></a>
            <ul role="menu" class="sub-menu">
                <li><a href="<?= Url::toRoute(['blog/index']) ?>">Blog Default</a></li>
                <li><a href="<?= Url::toRoute(['blog/timeline_blog']) ?>">Timeline Blog</a></li>
                <li><a href="<?= Url::toRoute(['blog/2_columns+right_sidebar']) ?>">2 Columns + Right Sidebar</a></li>
                <li><a href="<?= Url::toRoute(['blog/1_columns+right_sidebar']) ?>">1 Column + Left Sidebar</a></li>
                <li><a href="<?= Url::toRoute(['blog/blog_masounary']) ?>">Blog Masonary</a></li>
                <li><a href="<?= Url::toRoute(['blog/blog_details']) ?>">Blog Details</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="<?= Url::toRoute(['portfolio/index']) ?>"><?= Yii::t('frontend', 'NAV_PORTFOLIO') ?> <i class="fa fa-angle-down"></i></a>
            <ul role="menu" class="sub-menu">
                <li><a href="<?= Url::toRoute(['portfolio/index']) ?>">Portfolio Default</a></li>
                <li><a href="<?= Url::toRoute(['portfolio/isotope_3_columns+right_sidebar']) ?>">Isotope 3 Columns + Right Sidebar</a></li>
                <li><a href="<?= Url::toRoute(['portfolio/3_columns+right_sidebar']) ?>">3 Columns + Right Sidebar</a></li>
                <li><a href="<?= Url::toRoute(['portfolio/3_columns+left_sidebar']) ?>">3 Columns + Left Sidebar</a></li>
                <li><a href="<?= Url::toRoute(['portfolio/2_columns']) ?>">2 Columns</a></li>
                <li><a href="<?= Url::toRoute(['portfolio/portfolio_details']) ?>">Portfolio Details</a></li>
            </ul>
        </li>
        <!--<li><a href="<?//= Url::toRoute(['shortcodes/index']) ?>"><?//= Yii::t('frontend', 'NAV_SHORTCODES') ?></a></li>-->
        <?php if (Yii::$app->user->isGuest) : ?>
            <li><a href="<?= yii\helpers\Url::toRoute(['/site/login']) ?>"><?= Yii::t('frontend', 'NAV_LOGIN') ?></a></li>
        <?php else : ?>
            <li class="dropdown"><a href="<?= Url::toRoute(['/user/profile/index']) ?>"><?= Yii::t('frontend', 'NAV_PROFILE') ?> (<?= Yii::$app->user->identity->username ?>) <i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="sub-menu">
                    <li><a href="<?= yii\helpers\Url::toRoute(['/blog/article/create']) ?>"><?= Yii::t('frontend', 'NAV_ARTICLE_CREATE') ?></a></li>
                    <li><a href="<?= yii\helpers\Url::toRoute(['/user/default/logout']) ?>"><?= Yii::t('frontend', 'NAV_LOGOUT') ?></a></li>

<!--                    <li><a href="--><?//= yii\helpers\Url::toRoute(['/user/profile/index']) ?><!--">--><?//= Yii::t('frontend', 'NAV_PROFILE') ?><!--</a></li>-->
                    <?//php if(Yii::$app->user->can('admin')): ?>
<!--                    <li><a href="--><?//= yii\helpers\Url::toRoute(['/admin/default/index']) ?><!--">--><?//= Yii::t('frontend', 'NAV_ADMIN') ?><!--</a></li>-->
                    <?//php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</div>