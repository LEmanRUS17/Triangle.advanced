<?php

use app\modules\blog\models\User;
use app\modules\blog\Module;

?>
<div class="response-area">
    <h2 class="bold">Comments</h2>
    <ul class="media-list">
<!--        <li class="media">-->
<!--            <div class="post-comment">-->
<!--                <a class="pull-left" href="#">-->
<!--                    <img class="media-object" src="/images/blogdetails/2.png" alt="">-->
<!--                </a>-->
<!--                <div class="media-body">-->
<!--                    <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>-->
<!--                    <ul class="nav navbar-nav post-nav">-->
<!--                        <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>-->
<!--                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="parrent">-->
<!--                <ul class="media-list">-->
<!--                    <li class="post-comment reply">-->
<!--                        <a class="pull-left" href="#">-->
<!--                            <img class="media-object" src="/images/blogdetails/3.png" alt="">-->
<!--                        </a>-->
<!--                        <div class="media-body">-->
<!--                            <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>-->
<!--                            <ul class="nav navbar-nav post-nav">-->
<!--                                <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </li>-->
        <?php if (!empty($comments)) : ?>
            <h3>Коментарии</h3>
            <?php foreach ($comments as $comment) : ?>
            <?php $author = User::findOne($article->author_id); ?>
            <li class="media">
                <div class="post-comment">
<!--                    <a class="pull-left" href="#">-->
<!--                        <img class="media-object" src="/images/blogdetails/4.png" alt="">-->
<!--                    </a>-->
                    <div class="media-body">
                        <span><i class="fa fa-user"></i><?= Module::t('module', 'VIEW_ARTICLE_AUTHOR') . ': ' ?><a href="#"><?= $comment->user->username; ?></a></span>
                        <p><?= $comment->text ?></p>
                        <ul class="nav navbar-nav post-nav">
                            <li><a href="#"><i class="fa fa-clock-o"></i><?= $comment->getDate(); ?></a></li>
<!--                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>-->
                        </ul>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        <?php else: ?>
            <h3>Коментариев к этой статье нет</h3>
        <?php endif; ?>

    </ul>
</div><!--/Response-area-->