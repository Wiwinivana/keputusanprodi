<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniskelamin */

$this->title = 'Sunting Jeniskelamin: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniskelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jeniskelamin-update">
	<div class="box box-primary">
            <div class="box-header with-border">
            
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
