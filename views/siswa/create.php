<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = 'Tambah Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-create">
<div class="box box-primary">
            <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
