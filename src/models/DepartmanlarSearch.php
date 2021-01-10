<?php

namespace burakcantemizel\fdcys\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use burakcantemizel\fdcys\models\Departmanlar;

/**
 * DepartmanlarSearch represents the model behind the search form of `backend\models\Departmanlar`.
 */
class DepartmanlarSearch extends Departmanlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['departman_id'], 'integer'],
            [['departman_adi', 'firmalar_firma_id', 'departman_adres', 'departman_telefon'], 'safe'],
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
        $query = Departmanlar::find();

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


        // grid filtering conditions
        $query->andFilterWhere([
            'departman_id' => $this->departman_id,
        ]);

        $query->andFilterWhere(['like', 'departman_adi', $this->departman_adi])
            ->andFilterWhere(['like', 'departman_adres', $this->departman_adres])
            ->andFilterWhere(['like', 'departman_telefon', $this->departman_telefon])
            ->andFilterWhere(['like', 'firmalar.firma_adi', $this->firmalar_firma_id]);

        return $dataProvider;
    }
}
