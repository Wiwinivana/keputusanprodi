<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JeniskelaminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Kelamin';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="box box-primary">
            <div class="box-header with-border">
<div class="jeniskelamin-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Jenis Kelamin', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
