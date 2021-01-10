<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DepartmanlarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departmanlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'departman_id') ?>

    <?= $form->field($model, 'firmalar_firma_id') ?>

    <?= $form->field($model, 'departman_adi') ?>

    <?= $form->field($model, 'departman_adres') ?>

    <?= $form->field($model, 'departman_telefon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
