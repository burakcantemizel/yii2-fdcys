<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FirmalarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Firmalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firmalar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Firmalar', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Get List HTTP API', ['api/firmalar'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'firma_id',
            'firma_adi',
            'firma_adresi',
            'firma_telefon',
            'firma_eposta',
            //'firma_tipi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<?= Html::a('Modül Anasayfasına Dön', ['/fdcys/'], ['class'=>'btn btn-primary']) ?>