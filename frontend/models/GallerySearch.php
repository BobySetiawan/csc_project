<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gallery;

/**
 * GallerySearch represents the model behind the search form of `app\models\Gallery`.
 */
class GallerySearch extends Gallery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Gallery', 'Judul', 'Foto', 'Tanggal'], 'safe'],
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
        $query = Gallery::find();

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
            'Tanggal' => $this->Tanggal,
        ]);

        $query->andFilterWhere(['like', 'Kd_Gallery', $this->Kd_Gallery])
            ->andFilterWhere(['like', 'Judul', $this->Judul])
            ->andFilterWhere(['like', 'Foto', $this->Foto]);

        return $dataProvider;
    }
}
