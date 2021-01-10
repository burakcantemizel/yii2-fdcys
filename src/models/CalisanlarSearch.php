<?php

namespace burakcantemizel\fdcys\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use burakcantemizel\fdcys\models\Calisanlar;

/**
 * CalisanlarSearch represents the model behind the search form of `backend\models\Calisanlar`.
 */
class CalisanlarSearch extends Calisanlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calisan_id', 'calisan_maas'], 'integer'],
            [['calisan_ad_soyad',  'departmanlar_departman_id', 'firmalar_firma_id', 'calisan_tc_no', 'calisan_telefon', 'calisan_eposta'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Calisanlar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('firmalarFirma');
        $query->joinWith('departmanlarDepartman');

        // grid filtering conditions
        $query->andFilterWhere([
            'calisan_id' => $this->calisan_id,
            'calisan_maas' => $this->calisan_maas,
        ]);

        $query->andFilterWhere(['like', 'calisan_ad_soyad', $this->calisan_ad_soyad])
            ->andFilterWhere(['like', 'calisan_tc_no', $this->calisan_tc_no])
            ->andFilterWhere(['like', 'calisan_telefon', $this->calisan_telefon])
            ->andFilterWhere(['like', 'calisan_eposta', $this->calisan_eposta])
            ->andFilterWhere(['like', 'firmalar.firma_adi', $this->firmalar_firma_id])
            ->andFilterWhere(['like', 'departmanlar.departman_adi', $this->departmanlar_departman_id]);

        return $dataProvider;
    }
}
