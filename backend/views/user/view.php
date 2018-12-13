<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-12
 * Time: 上午10:40
 */
use kartik\detail\DetailView;

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Admin User', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
    <?=DetailView::widget([
        'model' => $model,
        'condensed' => true,
        'hover' => true,
        'buttons1' => '',
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
                        'valueColOptions' => ['style' => 'width: 80%'],
                    ]
                ]
            ],
            [
                'columns' => [
                    [
                        'attribute' => 'is_admin',
                        'format' => 'raw',
                        'value' => judge('is_admin', $model->is_admin),
                        'labelColOptions' => ['style' => 'width: 20%'],
                        'valueColOptions' => ['style' => 'width: 30%'],
                    ],
                    [
                        'attribute' => 'status',
                        'format' => 'raw',
                        'value' => judge('status', $model->status),
                        'labelColOptions' => ['style' => 'width: 20%'],
                        'valueColOptions' => ['style' => 'width: 30%'],
                    ]
                ]
            ]
        ]
    ])?>
</div>
