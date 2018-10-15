<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'No_Reg') ?>

    <?= $form->field($model, 'Kd_program') ?>

    <?= $form->field($model, 'Nama_Program') ?>

    <?= $form->field($model, 'Deskripsi_program') ?>

    <?= $form->field($model, 'Tanggal_pelaksanaan') ?>

    <?php // echo $form->field($model, 'Tujuan') ?>

    <?php // echo $form->field($model, 'flag_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
