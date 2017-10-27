<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\SoalPilihan;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Soals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-view">
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
            'pertanyaan',
        ],
    ]) ?>

</div>

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Soal</th>
            <th>Pilihan Jawaban</th>
            <th>Status</th>
        </tr>
    </thead>
    <tr>
        <?php
            $i=1;
            foreach ($model->soalPilihans as $data) { ?>
            <td><?= $i; ?></td>
            <td><?= $data->idSoal->pertanyaan;?></td> <!-- fungsi->properti/field di model soalpilihan -->
            <td><?= $data->pilihan;?></td>
            <td><?= $data->status;?></td>
    </tr>
        <?php $i++; } ?>

</table>
<?php        
?>