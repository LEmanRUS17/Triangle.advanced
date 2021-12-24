<?php

namespace app\modules\blog\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\blog\models\Article;
use yii\data\Pagination;

/**
 * ArticleSearch represents the model behind the search form of `app\modules\blog\models\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'author_id'], 'integer'],
            [['title', 'content', 'date', 'viewed', 'status', 'category_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Article::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'author_id' => $this->author_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'viewed', $this->viewed])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'category_id', $this->category_id]);

        return $dataProvider;
    }

    public static function getAll($pageSize = 5) // Статичный метод для получени пагинации
    {
        // создать запрос к БД, чтобы получить все статьи
        $query      = ArticleSearch::find()->orderBy('date DESC');     // Получение статей из БД
        $pagination = ArticleSearch::getPagination($query, $pageSize); // Сформировать пагинацию

        return ArticleSearch::ArticlesByPage($query, $pagination);
    }

    public static function getPagination($query, $pageSize = 5, $forcePageParam = false, $pageSizeParam = false) // Сформировать пагинацию
    {
        $pagination = new Pagination(['totalCount' => $query->count(), // Передача количества
            'pageSize'       => $pageSize,       // Количество элементов на странице
            'forcePageParam' => $forcePageParam,
            'pageSizeParam'  => $pageSizeParam
        ]);

        return $pagination;
    }

    public static function ArticlesByPage($query, $pagination)  // Сформировать Массив из статей с пагинацией
    {
        // ограничить запрос с помощью разбивки на страницы и получить статьи
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit) // Указание лимита выводимых записей на странице
            ->all();

        $data['articles']   = $articles;
        $data['pagination'] = $pagination;

        return $data;
    }

    public function getDate($format = null) // Получить дату создания
    {
        return Yii::$app->formatter->asDate($this->date, $format);
    }
}
