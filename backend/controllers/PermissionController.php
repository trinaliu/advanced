<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-14
 * Time: 下午4:25
 */

namespace backend\controllers;

class PermissionController extends BaseController
{
    /**
     * 列表页面
     * @return string
     * user: trina
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}