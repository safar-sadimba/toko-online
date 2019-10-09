<?php

namespace frontend\Models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\Models\castemer;

/**
 * castemerSearch represents the model behind the search form of `frontend\Models\castemer`.
 */
class castemerSearch extends castemer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Telepon', 'id_user'], 'integer'],
            [['Nama', 'Alamat', 'Email'], 'safe'],
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
        $query = castemer::find();

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
            'Telepon' => $this->Telepon,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
