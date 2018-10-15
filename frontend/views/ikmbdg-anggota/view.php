<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IkmbdgAnggota */

$this->title = $model->No_Reg;
$this->params['breadcrumbs'][] = ['label' => 'Ikmbdg Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ikmbdg-anggota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->No_Reg], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->No_Reg], [
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
            'No_Reg',
            'Nama_Lengkap',
            'Nama_Panggilan',
            'Username',
            'Password',
            'TTL',
            'tanggal',
            'Jk',
            'Agama',
            'Alamat_asal:ntext',
            'Alamat_bdg:ntext',
            'asaldaerah',
            'Email:email',
            'No_Hp',
            'Universitas',
            'Fakultas',
            'Jurusan',
            'Hobby',
            'Gambar',
            'Level',
        ],
    ]) ?>

</div>
