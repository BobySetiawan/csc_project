<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Berita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Judul_Berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Deskripsi_Berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Isi_Berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal_Berita')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
