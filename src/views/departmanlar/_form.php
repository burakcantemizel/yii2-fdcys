<?php

use yii\helpers\ArrayHelper;
use burakcantemizel\fdcys\models\Firmalar;


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Departmanlar */
/* @var $form yii\widgets\ActiveForm */

//  $form->field($model, 'firmalar_firma_id')->textInput()

?>



<div class="departmanlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firmalar_firma_id')->dropDownList(
        ArrayHelper::map(Firmalar::find()->all(),'firma_id', 'firma_adi'),
        ['prompt' => 'Firma Seçiniz']
    ) ?>

    <?= $form->field($model, 'departman_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departman_adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departman_telefon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
