<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_gallery".
 *
 * @property string $Kd_Gallery
 * @property string $Judul
 * @property string $Foto
 * @property string $Tanggal
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Gallery', 'Judul', 'Foto', 'Tanggal'], 'required'],
            [['Tanggal'], 'safe'],
            [['Kd_Gallery'], 'string', 'max' => 12],
            [['Judul'], 'string', 'max' => 100],
            [['Foto'], 'string', 'max' => 1000],
            [['Kd_Gallery'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kd_Gallery' => 'Kd  Gallery',
            'Judul' => 'Judul',
            'Foto' => 'Foto',
            'Tanggal' => 'Tanggal',
        ];
    }
}
