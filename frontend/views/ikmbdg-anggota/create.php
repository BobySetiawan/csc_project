<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IkmbdgAnggota */

$this->title = 'Create Ikmbdg Anggota';
$this->params['breadcrumbs'][] = ['label' => 'Ikmbdg Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ikmbdg-anggota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
