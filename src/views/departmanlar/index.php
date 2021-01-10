<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmanlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departmanlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departmanlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Departmanlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'firmalar_firma_id',
                'value' => 'firmalarFirma.firma_adi',
            ],
            
            'departman_id',
            'departman_adi',
            'departman_adres',
            'departman_telefon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
