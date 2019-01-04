<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>


<ul class="timeline">

    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-red">
            10 Feb. 2014
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-camera bg-purple"></i>
        <div class="timeline-item">
           <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

            <div class="timeline-body">
                ...
                Content goes here
            </div>

            <div class="timeline-footer">
                <a class="btn btn-primary btn-xs">...</a>
            </div>
        </div>
    </li>
    <li>
        <i class="fa fa-clock-o bg-gray"></i>
    </li>


</ul>