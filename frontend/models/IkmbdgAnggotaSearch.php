<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IkmbdgAnggota;

/**
 * IkmbdgAnggotaSearch represents the model behind the search form of `app\models\IkmbdgAnggota`.
 */
class IkmbdgAnggotaSearch extends IkmbdgAnggota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Reg'], 'integer'],
            [['Nama_Lengkap', 'Nama_Panggilan', 'Username', 'Password', 'TTL', 'tanggal', 'Jk', 'Agama', 'Alamat_asal', 'Alamat_bdg', 'asaldaerah', 'Email', 'No_Hp', 'Universitas', 'Fakultas', 'Jurusan', 'Hobby', 'Gambar', 'Level'], 'safe'],
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
        $query = IkmbdgAnggota::find();

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
            'No_Reg' => $this->No_Reg,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'Nama_Lengkap', $this->Nama_Lengkap])
            ->andFilterWhere(['like', 'Nama_Panggilan', $this->Nama_Panggilan])
            ->andFilterWhere(['like', 'Username', $this->Username])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'TTL', $this->TTL])
            ->andFilterWhere(['like', 'Jk', $this->Jk])
            ->andFilterWhere(['like', 'Agama', $this->Agama])
            ->andFilterWhere(['like', 'Alamat_asal', $this->Alamat_asal])
            ->andFilterWhere(['like', 'Alamat_bdg', $this->Alamat_bdg])
            ->andFilterWhere(['like', 'asaldaerah', $this->asaldaerah])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'No_Hp', $this->No_Hp])
            ->andFilterWhere(['like', 'Universitas', $this->Universitas])
            ->andFilterWhere(['like', 'Fakultas', $this->Fakultas])
            ->andFilterWhere(['like', 'Jurusan', $this->Jurusan])
            ->andFilterWhere(['like', 'Hobby', $this->Hobby])
            ->andFilterWhere(['like', 'Gambar', $this->Gambar])
            ->andFilterWhere(['like', 'Level', $this->Level]);

        return $dataProvider;
    }
}
