<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MucDoBaoTri */

$this->title = $model->ten_mucdo;
$this->params['breadcrumbs'][] = ['label' => 'Mức độ bảo trì', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muc-do-bao-tri-view">
    <div class="row">
        <div class="col-lg-6">
            <h4>Mức độ bảo trì: <?= Html::encode($this->title) ?></h4>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['update', 'id' => $model->id_mucdo], ['class' => 'glyphicon glyphicon-pencil btn btn-primary']) ?>
            <?php
            if ($m_mucdo == 0) {
            echo Html::a(' ', ['delete', 'id' => $model->id_mucdo], [
                'class' => 'glyphicon glyphicon-trash btn btn-danger',
                'data' => [
                'confirm' => 'Bạn có chắc chắn muốn xóa thông tin này?',
                'method' => 'post',
                ],
                ]);
            }
            ?>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_mucdo',
            'ten_mucdo',
            'thutu',
        ],
    ]) ?>
</div>
