<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use app\models\JenisKelamin;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Siswa */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin([
    'layout'=>'horizontal',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

<div class="siswa-form">

     <?php $form->errorSummary($model); ?>

    <?= $form->field($model, 'nomorpeserta')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jeniskelamin')->widget(Select2::classname(), [

        'data' => JenisKelamin::getList(),
        'language' => 'de',
        'options' => ['placeholder' => '--Pilih Jenis Kelamin--'],
        'pluginOptions' => [
            'allowClear' => true
    ],
    ]); ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::className(), [
            'removeButton' => false,
            'options' => ['placeholder' => 'Tanggal'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
        ]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-3">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-flat' : 'btn btn-primary btn-flat']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
