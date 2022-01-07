<?php

use app\modules\blog\models\Comment;
use app\modules\blog\models\User;
use app\modules\blog\Module;

$author = User::findOne($article->author_id);

?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?= Module::t('module', 'VIEW_ARTICLE_INFO') ?></h1>
                        <p><?= Module::t('module', 'VIEW_ARTICLE_RIGHT_PANEL') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section id="blog-details" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-7">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="single-blog blog-details two-column">
                            <div class="post-content overflow">
                                <h2 class="post-title bold"><a href="#"><?= $article->title ?></a></h2>
                                <h3 class="post-author"><a href="#"><?= Module::t('module', 'VIEW_ARTICLE_AUTHOR') . ': ' .  $author->username ?></a></h3>
                                <p>
                                    <?= $article->content ?>
                                </p>
                                <div class="post-bottom overflow">
                                    <ul class="nav navbar-nav post-nav">
                                        <li><a href="#"><i class="fa fa-comments"></i><?= Module::t('module', 'ARTICLE_COMMENTS') . ': '?> <?= Comment::numberOfComments($article->id) ?></a></li>
                                    </ul>
                                </div>

                                <?= $this->render('inc/author-profile') ?>

                                <?= $this->render('inc/response_area', compact('comments')) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="sidebar blog-sidebar">

                    <?= $this->render('inc/recent') ?>

                    <?= $this->render('inc/categories') ?>

                    <?= $this->render('inc/tag-cloud') ?>

                    <?= $this->render('inc/popular') ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/#blog-->