<?php

namespace app\modules\blog\controllers;

use app\modules\blog\models\ArticleSearch;
use yii\web\Controller;

/**
 * Default controller for the `blog` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $data = ArticleSearch::getAll(2);

        return $this->render('index', [
            'articles'   => $data['articles'],
            'pagination' => $data['pagination'],
        ]);
    }
}
