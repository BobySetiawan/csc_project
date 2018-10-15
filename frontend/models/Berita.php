<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_berita".
 *
 * @property string $Kd_berita
 * @property string $Judul_Berita
 * @property string $Deskripsi_Berita
 * @property string $Isi_Berita
 * @property string $Tanggal_Berita
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_berita', 'Judul_Berita', 'Deskripsi_Berita', 'Isi_Berita', 'Tanggal_Berita'], 'required'],
            [['Tanggal_Berita'], 'safe'],
            [['Kd_berita'], 'string', 'max' => 12],
            [['Judul_Berita'], 'string', 'max' => 100],
            [['Deskripsi_Berita'], 'string', 'max' => 200],
            [['Isi_Berita'], 'string', 'max' => 10000],
            [['Kd_berita'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kd_berita' => 'Kd Berita',
            'Judul_Berita' => 'Judul  Berita',
            'Deskripsi_Berita' => 'Deskripsi  Berita',
            'Isi_Berita' => 'Isi  Berita',
            'Tanggal_Berita' => 'Tanggal  Berita',
        ];
    }
}
