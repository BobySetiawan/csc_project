<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sejarah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sejarah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Sejarah')->textInput() ?>

    <?= $form->field($model, 'Judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Isi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
