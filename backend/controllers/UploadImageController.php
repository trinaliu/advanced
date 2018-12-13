<?php
/**
 * Created by PhpStorm.
 * User: trina
 * Date: 18-9-14
 * Time: 上午9:56
 */

namespace backend\controllers;


use common\models\UploadForm;
use yii\web\Controller;
use yii\web\UploadedFile;

class UploadImageController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        $model = new UploadForm();

        if (\Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }
        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionUploadTest()
    {
        $this->layout = false;
        return $this->render('upload-test');
    }

    public function actionTest()
    {
        $this->layout = 'main-login';
        return $this->render('test');
    }

}