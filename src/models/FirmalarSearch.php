<?php

namespace burakcantemizel\fdcys\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use burakcantemizel\fdcys\models\Firmalar;

/**
 * FirmalarSearch represents the model behind the search form of `backend\models\Firmalar`.
 */
class FirmalarSearch extends Firmalar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firma_id'], 'integer'],
            [['firma_adi', 'firma_adresi', 'firma_telefon', 'firma_eposta', 'firma_tipi'], 'safe'],
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
        $query = Firmalar::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'firma_id' => $this->firma_id,
        ]);

        $query->andFilterWhere(['like', 'firma_adi', $this->firma_adi])
            ->andFilterWhere(['like', 'firma_adresi', $this->firma_adresi])
            ->andFilterWhere(['like', 'firma_telefon', $this->firma_telefon])
            ->andFilterWhere(['like', 'firma_eposta', $this->firma_eposta])
            ->andFilterWhere(['like', 'firma_tipi', $this->firma_tipi]);

        return $dataProvider;
    }
}
