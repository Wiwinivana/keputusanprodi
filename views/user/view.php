<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-view">
    <div class="box box-primary">
            <div class="box-header with-border">

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i>Sunting', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-trash"></i>Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'username',
            'password',
            'model',
            'id_role',
            'nama_siswa',
            'create_at',
            'update_at',
            'last_login',
        ],
    ]) ?>

</div>
