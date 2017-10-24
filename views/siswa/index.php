<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-index">
    <div class="box box-primary">
            <div class="box-header with-border">
   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Siswa', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            'nomorpeserta',
            'nama',
           [
                'attribute' => 'id_jeniskelamin',
                'value' => function($data){
                    return $data->getRelationField('idJeniskelamin','nama');
                },
            ],
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
