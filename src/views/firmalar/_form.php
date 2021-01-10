<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Firmalar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firmalar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firma_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firma_adresi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firma_telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firma_eposta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firma_tipi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
