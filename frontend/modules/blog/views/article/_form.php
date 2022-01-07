<?php

use app\modules\blog\models\Category;
use app\modules\blog\Module;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>
<!--    --><?php //echo $form->field($model, 'category_id')
//        ->dropdownList(
//            Category::find() // Создание выпадающего списка | Получение записей из таблицы Category
//            ->select(['title', 'id'])   // Получение данных из столбцов title и id
//            ->indexBy('id')             // Имя столбца, по которому должны индексироваться результаты запроса.
//            ->column(),
//            ['prompt' => 'Выберите категорию:']
//        ); // Опции элемента
//    ?>

    <?php echo $form->field($model, 'category_id')
        ->dropdownList(
            Category::find() // Создание выпадающего списка | Получение записей из таблицы Category
            ->select(['title', 'id'])   // Получение данных из столбцов title и id
            ->indexBy('id')             // Имя столбца, по которому должны индексироваться результаты запроса.
            ->column(),
            ['prompt' => 'Выберите категорию:']
        ); // Опции элемента
    ?>
    <div class="form-group">
        <?= Html::submitButton(Module::t('module', '_FORM_SAVE'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
