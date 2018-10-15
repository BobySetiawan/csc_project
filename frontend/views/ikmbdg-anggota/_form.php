<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IkmbdgAnggota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ikmbdg-anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_Lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Panggilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TTL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'Jk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_asal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Alamat_bdg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'asaldaerah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Universitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hobby')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gambar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Level')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
