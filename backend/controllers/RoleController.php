<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-13
 * Time: 上午11:02
 */

namespace backend\controllers;

use backend\models\search\RoleSearch;
use Yii;

class RoleController extends BaseController
{
    public function actionIndex()
    {
        $searchModel = new RoleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
}