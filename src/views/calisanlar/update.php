<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Calisanlar */

$this->title = 'Update Calisanlar: ' . $model->calisan_id;
$this->params['breadcrumbs'][] = ['label' => 'Calisanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->calisan_id, 'url' => ['view', 'id' => $model->calisan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calisanlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
