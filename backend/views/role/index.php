<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-13
 * Time: 上午11:06
 */
use kartik\grid\GridView;
use yii\helpers\Html;

$this->title = 'Role';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-index">
    <?=GridView::widget([
        'id' => 'role',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Role</h3>',
            'before' => Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn btn-success']),
        ],
    ]);?>
</div>
