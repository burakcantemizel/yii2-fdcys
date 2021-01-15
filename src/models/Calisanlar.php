<?php

namespace burakcantemizel\fdcys\models;

use Yii;

/**
 * This is the model class for table "calisanlar".
 *
 * @property int $calisan_id
 * @property int $departmanlar_departman_id
 * @property int $firmalar_firma_id
 * @property string|null $calisan_ad_soyad
 * @property string|null $calisan_tc_no
 * @property string|null $calisan_telefon
 * @property string|null $calisan_eposta
 * @property int|null $calisan_maas
 *
 * @property Departmanlar $departmanlarDepartman
 * @property Firmalar $firmalarFirma
 */
class Calisanlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calisanlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['departmanlar_departman_id', 'firmalar_firma_id'], 'required'],
            [['departmanlar_departman_id', 'firmalar_firma_id', 'calisan_maas'], 'integer'],
            [['calisan_ad_soyad', 'calisan_tc_no', 'calisan_telefon', 'calisan_eposta'], 'string', 'max' => 255],
            [['departmanlar_departman_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departmanlar::className(), 'targetAttribute' => ['departmanlar_departman_id' => 'departman_id']],
            [['firmalar_firma_id'], 'exist', 'skipOnError' => true, 'targetClass' => Firmalar::className(), 'targetAttribute' => ['firmalar_firma_id' => 'firma_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'calisan_id' => 'Calisan ID',
            'departmanlar_departman_id' => 'Departman Adı**',
            'firmalar_firma_id' => 'Firma Adı**',
            'calisan_ad_soyad' => 'Calisan Ad Soyad',
            'calisan_tc_no' => 'Calisan Tc No',
            'calisan_telefon' => 'Calisan Telefon',
            'calisan_eposta' => 'Calisan Eposta',
            'calisan_maas' => 'Calisan Maas',
        ];
    }

    /**
     * Gets query for [[DepartmanlarDepartman]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmanlarDepartman()
    {
        return $this->hasOne(Departmanlar::className(), ['departman_id' => 'departmanlar_departman_id']);
    }

    /**
     * Gets query for [[FirmalarFirma]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFirmalarFirma()
    {
        return $this->hasOne(Firmalar::className(), ['firma_id' => 'firmalar_firma_id']);
    }
}
