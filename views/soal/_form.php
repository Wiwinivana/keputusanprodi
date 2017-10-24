<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pertanyaan')->widget(CKEditor::className(),[
    	'options' => ['rows' => 6],
    	'preset' => 'advanced',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-ok"></i>Simpan' : 'Sunting', ['class' => $model->isNewRecord ? 'btn btn-success btn-flat' : 'btn btn-primary btn-flat']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
