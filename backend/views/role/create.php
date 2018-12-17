<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-14
 * Time: 上午9:45
 */
use kartik\form\ActiveForm;
use kartik\builder\FormGrid;
use kartik\builder\Form;
use yii\helpers\Html;

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Role', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-create">
    <?php $form = ActiveForm::begin();?>
    <?=FormGrid::widget([
        'model' => $model,
        'form' => $form,
        'rows' => [
            [
                'contentBefore' => '<legend class="text-info"><small>Role Info</small></legend>',
                'attributes' => [
                    'name' => [
                        'type' => Form::INPUT_TEXT,
                    ],
                ],
            ],
            [
                'attributes' => [
                    'actions' => [
                        'type' => Form::INPUT_RAW,
                        'value' => '<div style="text-align: right; margin-top: 20px">' .
                            Html::resetButton('Reset', ['class'=>'btn btn-secondary']) . ' ' .
                            Html::submitButton('Submit', ['class'=>'btn btn-primary']) .
                            '</div>'
                    ]
                ]
            ]
        ]
    ]);?>
    <?php ActiveForm::end();?>
</div>
