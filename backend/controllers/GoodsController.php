<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-6
 * Time: 下午3:41
 */

namespace backend\controllers;

use common\logic\GoodsLogic;
use common\models\Goods;
use backend\models\User;

class GoodsController extends BaseController
{

    public function actionIndex()
    {
        $goods = (new Goods())->getAllInfo();
        $result = (new GoodsLogic())->handleForGoods($goods);

        return $this->render('index');
    }
}