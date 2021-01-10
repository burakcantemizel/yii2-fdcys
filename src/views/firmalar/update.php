<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Firmalar */

$this->title = 'Update Firmalar: ' . $model->firma_id;
$this->params['breadcrumbs'][] = ['label' => 'Firmalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firma_id, 'url' => ['view', 'id' => $model->firma_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="firmalar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
