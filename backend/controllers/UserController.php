<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-10
 * Time: 下午2:53
 */

namespace backend\controllers;

use backend\models\User;
use Yii;
use backend\models\search\UserSearch;

class UserController extends BaseController
{
    /**
     * 列表页面
     * @return string
     * user: trina
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 创建页面
     * @return string
     * user: trina
     */
    public function actionCreate()
    {
        $model = new User();
        $model->scenario = 'create';
        if ($model->load(Yii::$app->request->post())) {
            $model->generateAuthKey();
            $model->setPassword($model->password);

            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
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
        $model = (new User())->findModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @return string
     * @throws \yii\web\NotFoundHttpException
     * user: trina
     */
    public function actionUpdate($id)
    {
        $model = (new User())->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->updated_at = time();
            if ($model->password) {
                $model->setPassword($model->password);
            }

            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
}