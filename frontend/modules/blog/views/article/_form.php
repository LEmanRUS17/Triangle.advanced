<?php

use app\modules\blog\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 15
    ]) ?>

<!--    --><?php //echo $form->field($model, 'category_id')
//        ->dropdownList(
//            Category::find() // Создание выпадающего списка | Получение записей из таблицы Category
//            ->select(['title', 'id'])   // Получение данных из столбцов title и id
//            ->indexBy('id')             // Имя столбца, по которому должны индексироваться результаты запроса.
//            ->column(),
//            ['prompt' => 'Выберите категорию:']
//        ); // Опции элемента
//    ?>

    <?= $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('module', '_FORM_SAVE'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
