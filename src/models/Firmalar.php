<?php

namespace burakcantemizel\fdcys\models;

use Yii;

/**
 * This is the model class for table "firmalar".
 *
 * @property int $firma_id
 * @property string|null $firma_adi
 * @property string|null $firma_adresi
 * @property string|null $firma_telefon
 * @property string|null $firma_eposta
 * @property string|null $firma_tipi
 *
 * @property Calisanlar[] $calisanlars
 * @property Departmanlar[] $departmanlars
 */
class Firmalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'firmalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firma_adi', 'firma_adresi', 'firma_telefon', 'firma_eposta', 'firma_tipi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'firma_id' => 'Firma ID',
            'firma_adi' => 'Firma Adi',
            'firma_adresi' => 'Firma Adresi',
            'firma_telefon' => 'Firma Telefon',
            'firma_eposta' => 'Firma Eposta',
            'firma_tipi' => 'Firma Tipi',
        ];
    }

    /**
     * Gets query for [[Calisanlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalisanlars()
    {
        return $this->hasMany(Calisanlar::className(), ['firmalar_firma_id' => 'firma_id']);
    }

    /**
     * Gets query for [[Departmanlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmanlars()
    {
        return $this->hasMany(Departmanlar::className(), ['firmalar_firma_id' => 'firma_id']);
    }
}
