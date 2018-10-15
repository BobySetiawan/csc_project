<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BeritaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Kd_berita') ?>

    <?= $form->field($model, 'Judul_Berita') ?>

    <?= $form->field($model, 'Deskripsi_Berita') ?>

    <?= $form->field($model, 'Isi_Berita') ?>

    <?= $form->field($model, 'Tanggal_Berita') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
