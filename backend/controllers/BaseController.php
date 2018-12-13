<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-7
 * Time: 上午11:19
 */

namespace backend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use Yii;

class BaseController extends Controller
{
    /**
     * 判断是否登录
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * rbac权限控制
     */
    public function beforeAction($action)
    {
        //如果未登录，则直接返回
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/site/login']);
            return false;
        }
        return true;
    }
}