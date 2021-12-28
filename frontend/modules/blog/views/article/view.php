<?php

use app\modules\blog\Module;

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
                            <div class="post-thumb">
                                <a href="#"><img src="/images/blog/7.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <h2 class="post-title bold"><a href="#"><?= $article->title ?></a></h2>
                                <h3 class="post-author"><a href="#"><?= Module::t('module', 'VIEW_ARTICLE_AUTHOR') . ': ' .  $article->author_id ?></a></h3>
                                <p>
                                    <?= $article->content ?>
                                </p>
                                <div class="post-bottom overflow">
                                    <ul class="nav navbar-nav post-nav">
                                        <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="blog-share">
                                    <span class='st_facebook_hcount'></span>
                                    <span class='st_twitter_hcount'></span>
                                    <span class='st_linkedin_hcount'></span>
                                    <span class='st_pinterest_hcount'></span>
                                    <span class='st_email_hcount'></span>
                                </div>
                                <div class="author-profile padding">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="/images/blogdetails/1.png" alt="">
                                        </div>
                                        <div class="col-sm-10">
                                            <h3>Rodrix Hasel</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                            <span>Website:<a href="www.jooomshaper.com"> www.jooomshaper.com</a></span>
                                        </div>
                                    </div>
                                </div>

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