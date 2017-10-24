<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SoalPilihan */

$this->title = 'Sunting Soal Pilihan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Soal Pilihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="soal-pilihan-update">
	 <div class="box box-primary">
            <div class="box-header with-border">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
