<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SoalPilihan */

$this->title = 'Tambah Soal Pilihan';
$this->params['breadcrumbs'][] = ['label' => 'Soal Pilihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-pilihan-create">
	 <div class="box box-primary">
            <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
