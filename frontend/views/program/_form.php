<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Program */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'No_Reg')->textInput() ?>

    <?= $form->field($model, 'Nama_Program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Deskripsi_program')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Tanggal_pelaksanaan')->textInput() ?>

    <?= $form->field($model, 'Tujuan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'flag_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
