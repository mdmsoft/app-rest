<?php

use yii\helpers\Html;
use app\components\Toolbar;

/* @var $this yii\web\View */
/* @var $model app\models\master\Orgn */

$this->title = 'Update Orgn: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orgns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="col-lg-8 orgn-update">
    <?php
    echo Toolbar::widget(['items' => [
            ['label' => 'Create', 'url' => ['create'], 'icon' => 'fa fa-plus-square', 'linkOptions' => ['class' => 'btn btn-success btn-sm']],
            ['label' => 'Detail', 'url' => ['view', 'id' => $model->id],'icon' => 'fa fa-search', 'linkOptions' => ['class' => 'btn btn-success btn-sm']],
            ['label' => 'Update', 'url' => ['update', 'id' => $model->id],'icon' => 'fa fa-pencil', 'linkOptions' => ['class' => 'btn btn-success btn-sm']],
            ['label' => 'Delete', 'url' => ['delete', 'id' => $model->id],'icon' => 'fa fa-trash-o', 'linkOptions' => ['class' => 'btn btn-success btn-sm', 'data' => ['confirm' => 'Are you sure you want to delete this item?', 'method' => 'post']]],
            ['label' => 'List', 'url' => ['index'],'icon' => 'fa fa-list', 'linkOptions' => ['class' => 'btn btn-success btn-sm']]
    ]]);
    ?>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
