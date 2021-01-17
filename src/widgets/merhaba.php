<?php
namespace burakcantemizel\fdcys\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class merhaba extends Widget{
    public $mesaj;

    public function init(){
        parent::init();        
    }

    public function run(){
        //return Html::encode($this->mesaj);

        $html = '
        <div class="w3-panel w3-pale-blue w3-leftbar w3-rightbar w3-border-blue">
        <h1> Hoşgeldiniz. </h1>
        </div> 
        ';

        return $html;
    }
}
?>

