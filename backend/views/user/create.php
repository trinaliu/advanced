<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-11
 * Time: 下午3:48
 */

use kartik\builder\Form;
use kartik\builder\FormGrid;
use kartik\form\ActiveForm;
use yii\helpers\Html;

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Admin User', 'url' => ['user/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
    <?php $form = ActiveForm::begin();?>
    <?=FormGrid::widget([
        'model' => $model,
        'form' => $form,
        'rows' => [
            [
                'contentBefore'=>'<legend class="text-info"><small>Admin User Info</small></legend>',
                'attributes' => [
                    'email' => [
                        'type' => Form::INPUT_TEXT,
                    ],
                    'password' => [
                        'type' => Form::INPUT_PASSWORD,
                    ]
                ],
            ],
            [
                'attributes' => [
                    'is_admin' => [
                        'type' => Form::INPUT_RADIO_LIST,
                        'items' => Yii::$app->params['is_admin'],
                        'options' => [
                            'inline' => true,
                            'value' => 0,
                        ],
                    ]
                ]
            ],
            [
                'attributes' => [
                    'actions'=>[
                        'type'=>Form::INPUT_RAW,
                        'value'=>  '<div style="text-align: right; margin-top: 20px">' .
                            Html::resetButton('Reset', ['class'=>'btn btn-secondary']) . ' ' .
                            Html::submitButton('Submit', ['class'=>'btn btn-primary']) .
                            '</div>'
                    ],
                ]
            ]
        ]
    ]);?>
    <?php ActiveForm::end();?>
</div>
