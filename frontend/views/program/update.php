<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Program */

$this->title = 'Update Program: ' . $model->Kd_program;
$this->params['breadcrumbs'][] = ['label' => 'Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Kd_program, 'url' => ['view', 'id' => $model->Kd_program]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="program-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
