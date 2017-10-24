<?php

use app\models\Siswa;
use app\models\Soal;
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this yii\web\View */

$this->title = 'Keputusan Prodi Politeknik Negeri Indramayu';
?>
<div class="site-index">

    <div class="box-header with-border">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                <p>Jumlah Siswa</p>
                    <div class="icon">
                    <i class="fa fa-users"></i>
                    </div>
                    <h3><?=Siswa::getCount(); ?></h3>
                    <span style="font-size: 30px"></span>
                </div>
                 <a class="small-box-footer" href="<?= Url::to(['siswa/index']); ?>">Klik disini untuk melihat siswa</a>
            </div>
        </div>
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                <p>Jumlah Soal </p>
                    <div class="icon">
                    <i class="fa fa-user"></i>
                    </div>
                    <h3><?=Soal::getCount(); ?></h3>
                    <span style="font-size: 30px"></span>
                </div>
                <a class="small-box-footer" href="<?= Url::to(['soal/index']); ?>">Klik disini untuk melihat soal</a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                <p>Hasil Akhir</p>
                    <div class="icon">
                    <i class="fa fa-user"></i>
                    </div>
                    <h3>wwww</h3>
                    <span style="font-size: 30px"></span>
                </div>
                <a class="small-box-footer" href="<?= Url::to(['']); ?>">Klik disini untuk melihat Hasil</a>
            </div>
        </div>
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-purple">
                <div class="inner">
                <p>Jumlah </p>
                    <div class="icon">
                    <i class="fa fa-users"></i>
                    </div>
                    <h3>rgrgrgr</h3>
                    <span style="font-size: 30px"></span>
                </div>
               
                 </div>
             </div>
        </div>
    </div>
</div>

