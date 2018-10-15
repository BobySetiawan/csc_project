<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sejarah".
 *
 * @property int $Id_Sejarah
 * @property string $Judul
 * @property string $Isi
 */
class Sejarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_sejarah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Sejarah', 'Judul', 'Isi'], 'required'],
            [['Id_Sejarah'], 'integer'],
            [['Judul'], 'string', 'max' => 100],
            [['Isi'], 'string', 'max' => 10000],
            [['Id_Sejarah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Sejarah' => 'Id  Sejarah',
            'Judul' => 'Judul',
            'Isi' => 'Isi',
        ];
    }
}
