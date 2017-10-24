<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */

$this->title = 'Sunting Soal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Soals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="soal-update">
	 <div class="box box-primary">
            <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
