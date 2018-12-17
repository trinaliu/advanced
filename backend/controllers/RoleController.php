<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-13
 * Time: 上午11:02
 */

namespace backend\controllers;

use backend\models\Role;
use backend\models\search\RoleSearch;
use Yii;

class RoleController extends BaseController
{
    /**
     * 列表页面
     * @return string
     * user: trina
     */
    public function actionIndex()
    {
        $searchModel = new RoleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * 创建页面
     * @return string
     * user: trina
     */
    public function actionCreate()
    {
        $model = new Role();
        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = time();
            $model->updated_at = time();

            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    /**
     * 预览页面
     * @param $id
     * @return string
     * @throws \yii\web\NotFoundHttpException
     * user: trina
     */
    public function actionView($id)
    {
        $model = (new Role())->findModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * 编辑页面
     * @param $id
     * @return string
     * @throws \yii\web\NotFoundHttpException
     * user: trina
     */
    public function actionUpdate($id)
    {
        $model = (new Role())->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->updated_at = time();

            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }
}