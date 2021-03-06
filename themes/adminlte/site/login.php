<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
?>

<div  class="login-pages">
            <div class="login-logo">
              <p style="font-weight: bold; color: #F5C316">Aplikasi Sistem Keputusan Prodi</p>
              <p class="txt-l" style="font-weight: bold">Politeknik Negeri Indramayu</p>

            </div>

<div class="login-box">
    <div class="login-box-body">
    <p class="login-box-msg">Silahkan login terlebih dahulu</p>
        
   <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-signin'],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])->label(false); ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false); ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <div class="col-xs-4">

                <?= Html::submitButton('Login',
                    [
                        'id' => 'btnLogin',
                        'class' => 'btn btn-flat btn-primary btn-block btn-signin',
                        'name' => 'login-button'
                    ]) ?>
            </div>
            <div class="col-xs-8">
            <?= Html::a('Kembali ke Home', ['depan'], ['class' => 'text-info']); ?>
            </div>
            <div class="col-xs-4">
               <?= Html::a('Register', ['register'], ['class' => 'text-info']); ?>
            </div>


    <?php ActiveForm::end(); ?>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
