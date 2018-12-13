<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-12
 * Time: 上午10:40
 */
use kartik\detail\DetailView;

$this->title = 'Update';
$this->params['breadcrumbs'][] = ['label' => 'Admin User', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-update">
    <?=DetailView::widget([
        'model' => $model,
        'mode' => DetailView::MODE_EDIT,
        'condensed' => true,
        'hover' => true,
        'buttons2' => '{reset}{save}',
        'panel' => [
            'type' => DetailView::TYPE_PRIMARY,
            'heading' => 'ID '.$model->id,
        ],
        'attributes' => [
            [
                'group' => true,
                'label' => 'SECTION 1: Admin User Info',
                'rowOptions' => ['class' => 'info']
            ],
            [
                'columns' => [
                    [
                        'attribute' => 'email',
                        'labelColOptions' => ['style' => 'width: 20%'],
                        'valueColOptions' => ['style' => 'width: 30%'],
                    ],
                    [
                        'attribute' => 'password',
                        'type' => DetailView::INPUT_PASSWORD,
                        'labelColOptions' => ['style' => 'width: 20%'],
                        'valueColOptions' => ['style' => 'width: 30%'],
                    ]
                ]
            ],
            [
                'columns' => [
                    [
                        'attribute' => 'is_admin',
                        'type' => DetailView::INPUT_RADIO_LIST,
                        'items' => Yii::$app->params['is_admin'],
                        'options' => ['inline' => true],
                        'labelColOptions' => ['style' => 'width: 20%'],
                        'valueColOptions' => ['style' => 'width: 30%'],
                    ],
                    [
                        'attribute' => 'status',
                        'type' => DetailView::INPUT_RADIO_LIST,
                        'items' => Yii::$app->params['status'],
                        'options' => ['inline' => true],
                        'labelColOptions' => ['style' => 'width: 20%'],
                        'valueColOptions' => ['style' => 'width: 30%'],
                    ]
                ]
            ]
        ]
    ])?>
</div>
