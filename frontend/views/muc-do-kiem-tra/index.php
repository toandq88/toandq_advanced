<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MucDoKiemTraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mức độ kiểm tra cầu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muc-do-kiem-tra-index">
    <div class="row">
        <div class="col-lg-6">
            <h4><?= Html::encode($this->title) ?></h4>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['create'], ['class' => 'glyphicon glyphicon-plus-sign btn btn-primary']) ?>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            /*[
                'attribute' => 'id_mucdo',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],*/
            [
                'attribute' => 'ten',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'thutu',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center'],
                'headerOptions' => ['style' => 'text-align:center'],
                'header' => 'Thao tác',
                'template' => '{view} {update} ',
            ],
        ],
    ]);
    ?>
</div>
