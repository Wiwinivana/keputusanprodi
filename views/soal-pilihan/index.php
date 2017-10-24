<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SoalPilihanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Soal Pilihan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-pilihan-index">
     <div class="box box-primary">
            <div class="box-header with-border">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Soal Pilihan', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],
            
            [
                'attribute' => 'id_soal',
                'value' => function($data){
                    return $data->getRelationField('idSoal','pertanyaan');
                },
            ],
            'pilihan',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
