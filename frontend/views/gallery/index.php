<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use frontend\models\gallery;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< HEAD
$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>

=======
$this->title = 'Gallery CSC';
$this->params['breadcrumbs'][] = $this->title;
?>
>>>>>>> 92e8640eee187b50911004abe6fb42fc465e95fc

<ul class="timeline">

    <!-- timeline time label -->
    <?php foreach ($dataProvider->models as $model) { ?>
    <li class="time-label">
        <span class="bg-red">
            <?php echo $model->Tanggal; ?>
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-camera bg-purple"></i>
        <div class="timeline-item">
           <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

            <h3 class="timeline-header"><a href="#">Admin </a> uploaded new photos</h3>

            <div class="timeline-body">
                 <img src="<?= Yii::$app->request->baseUrl . '/images/' . $model->Foto ?>" class=" img-responsive" >
               
            </div>

            <div class="timeline-footer">
                <a class="btn btn-primary btn-xs"><?php echo $model->Judul; ?></a>
            </div>
        </div>
    </li>
    <?php } ?>
    <li>
        <i class="fa fa-clock-o bg-gray"></i>
    </li>


</ul>