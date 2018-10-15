<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IkmbdgAnggotaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ikmbdg-anggota-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'No_Reg') ?>

    <?= $form->field($model, 'Nama_Lengkap') ?>

    <?= $form->field($model, 'Nama_Panggilan') ?>

    <?= $form->field($model, 'Username') ?>

    <?= $form->field($model, 'Password') ?>

    <?php // echo $form->field($model, 'TTL') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'Jk') ?>

    <?php // echo $form->field($model, 'Agama') ?>

    <?php // echo $form->field($model, 'Alamat_asal') ?>

    <?php // echo $form->field($model, 'Alamat_bdg') ?>

    <?php // echo $form->field($model, 'asaldaerah') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'No_Hp') ?>

    <?php // echo $form->field($model, 'Universitas') ?>

    <?php // echo $form->field($model, 'Fakultas') ?>

    <?php // echo $form->field($model, 'Jurusan') ?>

    <?php // echo $form->field($model, 'Hobby') ?>

    <?php // echo $form->field($model, 'Gambar') ?>

    <?php // echo $form->field($model, 'Level') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
