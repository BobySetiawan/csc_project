<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IkmbdgAnggota */

$this->title = 'Update Ikmbdg Anggota: ' . $model->No_Reg;
$this->params['breadcrumbs'][] = ['label' => 'Ikmbdg Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Reg, 'url' => ['view', 'id' => $model->No_Reg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ikmbdg-anggota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
