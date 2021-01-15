<?php

namespace burakcantemizel\fdcys\controllers;
use burakcantemizel\fdcys\models\Departmanlar;
use burakcantemizel\fdcys\models\Firmalar;
use burakcantemizel\fdcys\models\Calisanlar;

class ApiController extends \yii\web\Controller{

	public function actionIndex(){
	    return $this->render('index');
    }

    public function actionDepartmanlar()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'departman_listesi' => Departmanlar::find()->all(),
        ];
    }

    public function actionFirmalar(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'firma_listesi' => Firmalar::find()->all(),
        ];
    }

    public function actionCalisanlar(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'calisan_listesi' => Calisanlar::find()->all(),
        ];
    }

}
