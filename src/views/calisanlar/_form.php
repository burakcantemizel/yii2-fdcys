<?php

use yii\helpers\ArrayHelper;
use burakcantemizel\fdcys\models\Firmalar;
use burakcantemizel\fdcys\models\Departmanlar;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Calisanlar */
/* @var $form yii\widgets\ActiveForm */

// $form->field($model, 'departmanlar_departman_id')->textInput()
// $form->field($model, 'firmalar_firma_id')->textInput()
?>

<div class="calisanlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firmalar_firma_id')->dropDownList(
        ArrayHelper::map(Firmalar::find()->all(),'firma_id', 'firma_adi'),
        ['prompt' => 'Firma Seçiniz']
    ) ?>

    <?= $form->field($model, 'departmanlar_departman_id')->dropDownList(
        ArrayHelper::map(Departmanlar::find()->all(),'departman_id', 'departman_adi'),
        ['prompt' => 'Departman Seçiniz']
    ) ?>
    

    <?= $form->field($model, 'calisan_ad_soyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calisan_tc_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calisan_telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calisan_eposta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calisan_maas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
