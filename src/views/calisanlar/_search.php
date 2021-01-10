<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CalisanlarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calisanlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'calisan_id') ?>

    <?= $form->field($model, 'departmanlar_departman_id') ?>

    <?= $form->field($model, 'firmalar_firma_id') ?>

    <?= $form->field($model, 'calisan_ad_soyad') ?>

    <?= $form->field($model, 'calisan_tc_no') ?>

    <?php // echo $form->field($model, 'calisan_telefon') ?>

    <?php // echo $form->field($model, 'calisan_eposta') ?>

    <?php // echo $form->field($model, 'calisan_maas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
