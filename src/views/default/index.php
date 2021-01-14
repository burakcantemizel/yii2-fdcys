<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;



$this->title = 'Firma-Departman-Çalışan Yönetim Sistemi';
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class = "w3-panel w3-blue w3-round-xlarge">
    <div>
        <h1><?= Html::encode($this->title) ?></h1>
        <p>İşlem yapmak istediğiniz sayfayı seçiniz</p>
    </div>

    <div class = "w3-panel w3-blue w3-round-xlarge">
        <div class = "w3-panel w3-indigo w3-round-large">
        <?= Html::img('https://images.pexels.com/photos/830891/pexels-photo-830891.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=150&w=150', ['alt' => 'Firmalar']) ?>
        <?= Html::a('Firmalar Sayfasını Görüntülelemek İçin Tıklayınız', ['/fdcys/firmalar'], ['class'=>'btn btn-primary']) ?>
        </div>

        <div class = "w3-panel w3-indigo w3-round-large">
        <?= Html::img('https://images.pexels.com/photos/3184357/pexels-photo-3184357.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=150&w=150', ['alt' => 'Departmanlar']) ?>
        <?= Html::a('Departmanlar Sayfasını Görüntülemek İçin Tıklayınız', ['/fdcys/departmanlar'], ['class'=>'btn btn-primary']) ?>
        </div>

        <div class = "w3-panel w3-indigo w3-round-large">
        <?= Html::img('https://images.pexels.com/photos/3810754/pexels-photo-3810754.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=150&w=150', ['alt' => 'Calisanlar']) ?>
        <?= Html::a('Çalışanlar Sayfasını Görüntülemek İçin Tıklayınız', ['/fdcys/calisanlar'], ['class'=>'btn btn-primary']) ?>
        </div>
    </div>

</div>
