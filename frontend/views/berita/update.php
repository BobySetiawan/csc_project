<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Berita */

$this->title = 'Update Berita: ' . $model->Kd_berita;
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Kd_berita, 'url' => ['view', 'id' => $model->Kd_berita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
