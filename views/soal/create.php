<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Soal */

$this->title = 'Tambah Soal';
$this->params['breadcrumbs'][] = ['label' => 'Soals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-create">
	 <div class="box box-primary">
            <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
