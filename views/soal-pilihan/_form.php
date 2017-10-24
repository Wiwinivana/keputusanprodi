<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Soal;

/* @var $this yii\web\View */
/* @var $model app\models\SoalPilihan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soal-pilihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_soal')->widget(Select2::classname(), [

        'data' => Soal::getList(),
        'language' => 'de',
        'options' => ['placeholder' => '--Pilih Pertanyaan--'],
        'pluginOptions' => [
            'allowClear' => true
    ],
    ]); ?>

    <?= $form->field($model, 'pilihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-ok"></i>Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-flat' : 'btn btn-primary btn-flat']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
