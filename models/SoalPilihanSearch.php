<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SoalPilihan;

/**
 * SoalPilihanSearch represents the model behind the search form about `app\models\SoalPilihan`.
 */
class SoalPilihanSearch extends SoalPilihan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_soal', 'status'], 'integer'],
            [['pilihan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = SoalPilihan::find();

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
            'id' => $this->id,
            'id_soal' => $this->id_soal,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'pilihan', $this->pilihan]);

        return $dataProvider;
    }
}
