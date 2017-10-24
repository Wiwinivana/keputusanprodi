<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-index">
<div class="box box-primary">
            <div class="box-header with-border">
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah User', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
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
            'username',
            'password',
            'model',
            // 'id_role',
            // 'nama_siswa',
            // 'create_at',
            // 'update_at',
            // 'last_login',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
