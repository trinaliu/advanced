<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-10
 * Time: 下午3:46
 */
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\daterange\DateRangePicker;

$this->title = 'Admin User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-user-index">
    <?=GridView::widget([
        'id' => 'admin-user',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'buttons' => [
                    'view' => function($url, $model) {
                        return Html::a('', Url::to(['view', 'id' => $model->id]), ['class' => 'glyphicon glyphicon-eye-open']);
                    },
                    'update' => function($url, $model) {
                        return Html::a('', Url::to(['update', 'id' => $model->id]), ['class' => 'glyphicon glyphicon-edit']);
                    },
                    'delete' => function($url, $model) {
                        return Html::a('', Url::to(['delete', 'id' => $model->id]), ['class' => 'glyphicon glyphicon-trash']);
                    }
                ]
            ],
            'id',
            'email',
            [
                'attribute' => 'is_admin',
                'format' => 'raw',
                'value' => function($model) {
                    return judge('is_admin', $model->is_admin);
                },
                'filter' => Yii::$app->params['is_admin'],
            ],
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model) {
                    return judge('status', $model->status);
                },
                'filter' => Yii::$app->params['status'],
            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:Y-m-d H:i:s'],
                'filter' => DateRangePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'created_at',
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'locale' => [
                            'format' => 'Y-m-d',
                            'separator' => ' to ',
                        ],
                    ],
                    'hideInput' => true,
                    'containerTemplate' =>
                        '<div class="form-control kv-drp-dropdown" style="position: relative;">
                        <i class="glyphicon glyphicon-calendar"></i>&nbsp;
                        <span class="range-value">{value}</span>
                        <span style="position: absolute; top: 8px; right: 5px;"><b class="caret"></b></span>
                    </div>
                    {input}',
                ])
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:Y-m-d H:i:s'],
                'filter' => DateRangePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'updated_at',
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'locale' => [
                            'format' => 'Y-m-d',
                            'separator' => ' to ',
                        ],
                    ],
                    'hideInput' => true,
                    'containerTemplate' =>
                        '<div class="form-control kv-drp-dropdown" style="position: relative;">
                        <i class="glyphicon glyphicon-calendar"></i>&nbsp;
                        <span class="range-value">{value}</span>
                        <span style="position: absolute; top: 8px; right: 5px;"><b class="caret"></b></span>
                    </div>
                    {input}',
                ])
            ],
        ],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Admin User</h3>',
            'before' => Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn btn-success', 'title' => 'Create Admin User']),
            'after' => false,
            'footer' => ''
        ],
        'toolbar' => '{toggleData}',
    ])?>
</div>
