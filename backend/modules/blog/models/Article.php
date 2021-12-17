<?php

namespace app\modules\blog\models;

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
            [['date'], 'safe'],
            [['title', 'content'], 'string', 'max' => 255],
            [['viewed', 'status', 'category_id'], 'string', 'max' => 11],
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
}
