<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-14
 * Time: 上午10:32
 */
use kartik\detail\DetailView;

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Role', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-view">
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
                'label' => 'SECTION 1: Role Info',
                'rowOptions' => ['class' => 'info'],
            ],
            [
                'columns' => [
                    [
                        'attribute' => 'name',
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
    ]);?>
</div>
