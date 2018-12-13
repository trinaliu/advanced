<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-6
 * Time: 下午3:26
 */

namespace common\models;

use yii\db\ActiveRecord;

class Goods extends ActiveRecord
{
    /**
     * 数据库表名
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * 验证规则
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'pid'], 'required'],
            [['title'], 'string', 'max' => 30],
            [['pid'], 'integer'],
        ];
    }

    /**
     * 获取所有的商品类名
     * @return array|ActiveRecord[]
     * user: trina
     */
    public function getAllInfo()
    {
        return self::find()->all();
    }
}