<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SejarahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sejarah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sejarah-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Sejarah</h3> <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'layout'=>'{summary}',]); ?>
                        </div>
                            <div class="box-body">
                                <div class="box-body table-responsive no-padding">
                                    <div class="table table-hover">

                            <p>
                                <?= Html::a('Create Sejarah', ['create'], ['class' => 'btn btn-danger']) ?>
                            </p>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'Id_Sejarah',
                                    'Judul',
                                    [
                                        'attribute' => 'Isi',
                                        'format' => 'raw',
                                    ],

                                    ['class' => 'yii\grid\ActionColumn'],
                                ],
                                'layout' => '{items}',
                            ]); ?>
                            <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'layout'=>'{pager}',]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
