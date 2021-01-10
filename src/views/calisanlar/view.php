<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Calisanlar */

$this->title = $model->calisan_id;
$this->params['breadcrumbs'][] = ['label' => 'Calisanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="calisanlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->calisan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->calisan_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'calisan_id',
            'departmanlar_departman_id',
            'firmalar_firma_id',
            'calisan_ad_soyad',
            'calisan_tc_no',
            'calisan_telefon',
            'calisan_eposta',
            'calisan_maas',
        ],
    ]) ?>

</div>
