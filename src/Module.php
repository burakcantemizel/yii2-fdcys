<?php

namespace burakcantemizel\fdcys;

class Module extends \yii\base\Module
{
	public function init()
	{
        $this->layout='main';
		parent::init();
		//$this->registerTranslations();
	}

	/*
	public function registerTranslations()
    {
        Yii::$app->i18n->translations['*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@vendor/burakcantemizel/yii2-fdcys/src/messages',
            'fileMap' => [
                'mainpage' => 'mainpage.php',
            ],
        ];
	}
	*/
	
	
}
