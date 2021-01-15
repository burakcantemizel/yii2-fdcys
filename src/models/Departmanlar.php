<?php

namespace burakcantemizel\fdcys\models;

use Yii;

/**
 * This is the model class for table "departmanlar".
 *
 * @property int $departman_id
 * @property int $firmalar_firma_id
 * @property string $departman_adi
 * @property string|null $departman_adres
 * @property string|null $departman_telefon
 *
 * @property Calisanlar[] $calisanlars
 * @property Firmalar $firmalarFirma
 */
class Departmanlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departmanlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firmalar_firma_id', 'departman_adi'], 'required'],
            [['firmalar_firma_id'], 'integer'],
            [['departman_adi', 'departman_adres', 'departman_telefon'], 'string', 'max' => 255],
            [['firmalar_firma_id'], 'exist', 'skipOnError' => true, 'targetClass' => Firmalar::className(), 'targetAttribute' => ['firmalar_firma_id' => 'firma_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'departman_id' => 'Departman ID',
            'firmalar_firma_id' => 'Firma Adı**',
            'departman_adi' => 'Departman Adi',
            'departman_adres' => 'Departman Adres',
            'departman_telefon' => 'Departman Telefon',
        ];
    }

    /**
     * Gets query for [[Calisanlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalisanlars()
    {
        return $this->hasMany(Calisanlar::className(), ['departmanlar_departman_id' => 'departman_id']);
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
