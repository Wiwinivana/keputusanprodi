<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SoalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Soal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-index">
     <div class="box box-primary">
            <div class="box-header with-border">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Soal', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            
            'pertanyaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
