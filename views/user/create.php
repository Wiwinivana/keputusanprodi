<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = 'Tambah User';
$this->params['breadcrumbs'][] = ['label' => 'Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-create">
	<div class="box box-primary">
            <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
