<?php

namespace app\modules\blog\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    public static function getAll() // Получение списка категорий
    {
        return Category::find()->all();
    }

    public function getArticlesCount() // Получение количества статей в категории
    {
        return $this->getArticles()->count();
    }

    public function getArticles() // Связь с таблицей Articles
    {
        return $this->hasMany(Article::class, ['category_id' => 'id']); // "Связь один к одному", связь category_id таблицы Article и id таблицы Category
    }
}
