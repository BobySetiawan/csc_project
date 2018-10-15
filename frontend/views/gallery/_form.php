<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_Gallery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
