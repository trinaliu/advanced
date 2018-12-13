<?php
/**
 * Created by PhpStorm.
 * User: trina
 * Date: 18-9-14
 * Time: 上午9:58
 */
use yii\widgets\ActiveForm;
?>
<div class="upload-image">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
        <?= $form->field($model, 'imageFile')->fileInput()?>
        <button>Submit</button>
    <?php ActiveForm::end()?>
</div>
