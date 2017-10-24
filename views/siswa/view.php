<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-view">
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
            'nomorpeserta',
            'nama',
            'id_jeniskelamin',
            'tanggal_lahir',
            'email:email',
            [
                'attribute' => 'photo',
                'format' => 'raw',
                'value' => function($data){
                    return $data->getPhoto(['style'=>'width:100px']);
                },
            ],
            'create_at',
        ],
    ]) ?>

</div>
