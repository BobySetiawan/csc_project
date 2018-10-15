<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sejarah */

$this->title = 'Create Sejarah';
$this->params['breadcrumbs'][] = ['label' => 'Sejarahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sejarah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
