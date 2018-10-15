<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Berita;

/**
 * BeritaSearch represents the model behind the search form of `app\models\Berita`.
 */
class BeritaSearch extends Berita
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_berita', 'Judul_Berita', 'Deskripsi_Berita', 'Isi_Berita', 'Tanggal_Berita'], 'safe'],
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
        $query = Berita::find();

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
            'Tanggal_Berita' => $this->Tanggal_Berita,
        ]);

        $query->andFilterWhere(['like', 'Kd_berita', $this->Kd_berita])
            ->andFilterWhere(['like', 'Judul_Berita', $this->Judul_Berita])
            ->andFilterWhere(['like', 'Deskripsi_Berita', $this->Deskripsi_Berita])
            ->andFilterWhere(['like', 'Isi_Berita', $this->Isi_Berita]);

        return $dataProvider;
    }
}
