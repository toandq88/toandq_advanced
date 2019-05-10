<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Cau;
use kartik\select2\Select2;

$id_bridge = (int)Yii::$app->getRequest()->getQueryParam('id_bridge');
if($id_bridge == 0){
    $id_bridge = null;
}
/* @var $this yii\web\View */
/* @var $model frontend\models\CauCatngangmatcau */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cau-catngangmatcau-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php
            echo $form->field($model, 'id_cau')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Cau::find()->all(), 'id_cau', 'ten'),
                'language' => 'en',
                'options' => ['placeholder' => 'Chọn cầu...', 'value' => $id_bridge],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>

        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'nhipcungdang')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'chieurongtoancau')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'phanxechay_chieurong')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'phanxechay_solanxe')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'phancach_berongphancachgiua')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'phancach_berongphancachbien')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'duongbohanh_berong')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'duongbohanh_beronglancan')->textInput() ?>
        </div>
    </div>
    <div class="row" style="margin-top: 20px; text-align: center">
        <div class="form-group">
            <?= Html::submitButton('Lưu lại', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
