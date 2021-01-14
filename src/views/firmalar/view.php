<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Firmalar */

$this->title = $model->firma_id;
$this->params['breadcrumbs'][] = ['label' => 'Firmalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="firmalar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->firma_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->firma_id], [
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
            'firma_id',
            'firma_adi',
            'firma_adresi',
            'firma_telefon',
            'firma_eposta',
            'firma_tipi',
        ],
    ]) ?>

    

</div>

<?= Html::a('Modül Anasayfasına Dön', ['/fdcys/'], ['class'=>'btn btn-primary']) ?>
