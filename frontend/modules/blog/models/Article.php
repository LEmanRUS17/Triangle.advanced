<?php

namespace app\modules\blog\models;
use app\modules\blog\models\Comment;
use app\modules\blog\Module;
use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $date
 * @property string|null $viewed
 * @property string|null $status
 * @property string|null $category_id
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'], // Заголовок, содержание | Обязателен
            [['title', 'content'], 'string'], // Заголовок, описание, содержание | Строка
            ['title', 'string', 'max' => 255], // Заголовок | Максимальное количество символов: 255
            ['date',  'date', 'format' => 'php: Y-m-d G:i:s'], // Дата | Дата, формат: Год-месяц-день час:минута
            ['date',  'default', 'value' => date('Y-m-d G:i:s')], // Дата | Значение по умолчанию: текущая дата
            ['author_id', 'integer'], // Автор | Входное значение типа "integer"
            ['author_id', 'default', 'value' => $_SESSION['__id']], // Автор | id залогиневшегося пользователя
            ['category_id', 'default', 'value' => 1], // Категория | Значение по умолчанию "1"
            ['status', 'default', 'value' => 1], // Статус | Значение по умолчанию "1"
            ['viewed', 'default', 'value' => 0], // Просмотры | Значение по умолчанию "0"
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => Module::t('module', 'ARTICLE_MODEL_ID'),
            'title'       => Module::t('module', 'ARTICLE_MODEL_TITLE'),
            'content'     => Module::t('module', 'ARTICLE_MODEL_CONTENT'),
            'date'        => Module::t('module', 'ARTICLE_MODEL_DATE'),
            'viewed'      => Module::t('module', 'ARTICLE_MODEL_VIEWED'),
            'status'      => Module::t('module', 'ARTICLE_MODEL_STATUS'),
            'category_id' => Module::t('module', 'ARTICLE_MODEL_CATEGORY_ID'),
            'author_id'   => Module::t('module', 'ARTICLE_MODEL_AUTHOR_ID'),
        ];
    }

    /* --- Coment --- */
    /**
     * Создание связи с таблицей comment.
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['article_id' => 'id']);
    }

    /**
     * Получение коминтариев со статусом 1
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getArticleComment($id)
    {
        return $this->getComments()->where(['status' => 1, 'article_id' => $id ])->all();
    }
    /* --- /Coment --- */

    /* --- Category --- */
    public function getCategory() // Создание связи с таблицей category
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']); // Создание связи
    }

    public function saveCategory($category_id) // Сохранить категорию
    {
        $category = Category::findOne($category_id); // получение категории
        if($category != null) { // Если категория не равна null
            $this->link('category', $category); // Передача связи
            return true;
        }
    }
    /* --- /Category ---*/
}
