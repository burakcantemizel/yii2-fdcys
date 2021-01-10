<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Firmalar */

$this->title = 'Create Firmalar';
$this->params['breadcrumbs'][] = ['label' => 'Firmalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firmalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
