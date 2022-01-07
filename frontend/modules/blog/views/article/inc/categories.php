<?php

use app\modules\blog\models\Category;
use app\modules\blog\Module;

$categories = Category::getAll();    // Получение всех категорий

?>

<div class="sidebar-item categories">
    <h3><?= Module::t('module', 'CATEGORIES')?></h3>
    <ul class="nav navbar-stacked">
        <?php foreach ($categories as $category) : ?>
            <li><a href="#"><?= $category->title ?><span class="pull-right">(<?= $category->getArticlesCount(); ?>)</span></a></li>
        <?php endforeach; ?>
    </ul>
</div>