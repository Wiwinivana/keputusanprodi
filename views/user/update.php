<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = 'Sunting User: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peserta-update">
	<div class="box box-primary">
            <div class="box-header with-border">

     <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
