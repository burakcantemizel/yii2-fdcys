<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CalisanlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Calisanlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calisanlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Calisanlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'departmanlar_departman_id',
                'value' => 'departmanlarDepartman.departman_adi',
            ],

            [
                'attribute' => 'firmalar_firma_id',
                'value' => 'firmalarFirma.firma_adi',
            ],
            
            'calisan_id',
            'calisan_ad_soyad',
            'calisan_tc_no',
            //'calisan_telefon',
            //'calisan_eposta',
            //'calisan_maas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<?= Html::a('Modül Anasayfasına Dön', ['/fdcys/'], ['class'=>'btn btn-primary']) ?>