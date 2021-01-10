<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Departmanlar */

$this->title = 'Update Departmanlar: ' . $model->departman_id;
$this->params['breadcrumbs'][] = ['label' => 'Departmanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->departman_id, 'url' => ['view', 'id' => $model->departman_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departmanlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
