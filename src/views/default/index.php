<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use burakcantemizel\fdcys\models\Departmanlar;
use burakcantemizel\fdcys\models\Firmalar;
use burakcantemizel\fdcys\models\Calisanlar;
use burakcantemizel\fdcys\widgets\merhaba;

$calisan_adet = count(Calisanlar::find()->all());
$firma_adet = count(Firmalar::find()->all());
$departman_adet = count(Departmanlar::find()->all()); 

$this->title = 'Firma-Departman-Çalışan Yönetim Sistemi';
?>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-card">
<?= merhaba::widget([]) ?>
</div>

<div class="w3-card-4">

  <header class="w3-container w3-blue">
    <h1>Firmalar-Departmanlar-Çalışanlar Yönetim Sistemi</h1>
    
    
  </header>

 

    <header class="w3-container w3-light-grey">
      <h3>Firmalar</h3>
    </header>
  
    <div class="w3-panel w3-pink">
        <h1 class="w3-opacity">
        <?= Html::img('https://images.pexels.com/photos/830891/pexels-photo-830891.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=125&w=125', ['class'=>'yok','alt' => 'Firmalar']) ?>
        <?= Html::label($firma_adet. ' Firma') ?>
    </div>
    
    
    <?= Html::a('Yeni Firmalar Yaratmak, Silmek, Düzenlemek Veya Görüntülemek İçin Tıklayınız.', ['/fdcys/firmalar'], ['class'=>'w3-button w3-block w3-dark-grey']) ?>

  

  <div class="w3-card-4">

    <header class="w3-container w3-light-grey">
      <h3>Departmanlar</h3>
    </header>

    <div class="w3-panel w3-blue">
    
    <h1 class="w3-opacity">
      <?= Html::img('https://images.pexels.com/photos/3184357/pexels-photo-3184357.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=125&w=125', ['class'=>'yok','alt' => 'Firmalar']) ?>
      <?= Html::label($departman_adet. ' Departman') ?>
    </div>
    
    
    <?= Html::a('Mevcut Firmalara Departman Eklemek, Silmek, Düzenlemek Veya Görüntülemek İçin Tıklayınız.', ['/fdcys/departmanlar'], ['class'=>'w3-button w3-block w3-dark-grey']) ?>

  </div>

  <div class="w3-card-4">

    <header class="w3-container w3-light-grey">
      <h3>Çalışanlar</h3>
    </header>

    <div class="w3-panel w3-pink">
    
    <h1 class="w3-opacity">
    <?= Html::img('https://images.pexels.com/photos/3810754/pexels-photo-3810754.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=125&w=125', ['class'=>'yok','alt' => 'Firmalar']) ?>
    <?= Html::label($calisan_adet. ' Çalışan') ?>
    </div>

    
    <?= Html::a('Firmaların Departmanlarına Çalışan Eklemek, Silmek, Düzenlemek Veya Görüntülemek İçin Tıklayınız.', ['/fdcys/calisanlar'], ['class'=>'w3-button w3-block w3-dark-grey']) ?>

  </div>



  <footer class="w3-container w3-blue">
    <h5>yii2-fdcys</h5>
  </footer>

</div>