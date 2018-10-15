<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sejarah */

$this->title = $model->Id_Sejarah;
$this->params['breadcrumbs'][] = ['label' => 'Sejarahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sejarah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Sejarah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Sejarah], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_Sejarah',
            'Judul',
            'Isi',
        ],
    ]) ?>

</div>
