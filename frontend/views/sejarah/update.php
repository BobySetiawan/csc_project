<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sejarah */

$this->title = 'Update Sejarah: ' . $model->Id_Sejarah;
$this->params['breadcrumbs'][] = ['label' => 'Sejarahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Sejarah, 'url' => ['view', 'id' => $model->Id_Sejarah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sejarah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
