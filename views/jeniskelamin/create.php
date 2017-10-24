<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jeniskelamin */

$this->title = 'Tambah Jenis Kelamin';
$this->params['breadcrumbs'][] = ['label' => 'Jeniskelamin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jeniskelamin-create">
<div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
