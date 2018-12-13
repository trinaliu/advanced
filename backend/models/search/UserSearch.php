<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-10
 * Time: 下午2:59
 */

namespace backend\models\search;

use backend\models\User;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class UserSearch extends User
{
    /**
     * 验证规则
     */
    public function rules()
    {
        return [
            ['email', 'string', 'max' => 255],
            [['id', 'status', 'is_admin'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    //场景
    public function scenarios()
    {
        return Model::scenarios();
    }

    //数据过滤
    public function search($params)
    {
        $query = User::find();

        //数据提供者可以获取数据，也可提供给其他，可以对数据进行分页和排序
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 2,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);

        //加载数据，并验证
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        //过滤
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'is_admin' => $this->is_admin,
        ]);
        $query->andFilterWhere(['like', 'email', $this->email]);

        //时间日期过滤
        if ($this->created_at) {
            list($start, $end) = explode(' to ', $this->created_at);
            $end .= ' 23:59:59';
            $query->andFilterWhere(['and', ['>=', 'created_at', strtotime($start)], ['<=', 'created_at', strtotime($end)]]);
        }
        if ($this->updated_at) {
            list($start, $end) = explode(' to ', $this->updated_at);
            $end .= ' 23:59:59';
            $query->andFilterWhere(['and', ['>=', 'updated_at', strtotime($start)], ['<=', 'updated_at', strtotime($end)]]);
        }

        return $dataProvider;
    }
}