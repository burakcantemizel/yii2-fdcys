<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Departmanlar */

$this->title = 'Create Departmanlar';
$this->params['breadcrumbs'][] = ['label' => 'Departmanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departmanlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
