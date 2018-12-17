<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-14
 * Time: 下午2:26
 */
use kartik\detail\DetailView;

$this->title = 'Update';
$this->params['breadcrumbs'][] = ['label' => 'Role', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-update">
    <?=DetailView::widget([
        'model' => $model,
        'mode' => DetailView::MODE_EDIT,
        'condensed' => true,
        'hover' =>true,
        'buttons2' => '{reset}{save}',
        'panel' => [
            'type' => DetailView::TYPE_PRIMARY,
            'heading' => 'ID '.$model->id,
        ],
        'attributes' => [
            [
                'group' => true,
                'heading' => 'SECTION 1: Role Info',
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
