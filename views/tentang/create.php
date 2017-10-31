<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tentang */

$this->title = 'Create Tentang';
$this->params['breadcrumbs'][] = ['label' => 'Tentangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
