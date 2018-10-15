<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_program".
 *
 * @property int $No_Reg
 * @property int $Kd_program
 * @property string $Nama_Program
 * @property string $Deskripsi_program
 * @property string $Tanggal_pelaksanaan
 * @property string $Tujuan
 * @property int $flag_update
 *
 * @property IkmbdgAnggota $noReg
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Reg', 'Nama_Program', 'Deskripsi_program', 'Tanggal_pelaksanaan', 'Tujuan'], 'required'],
            [['No_Reg', 'flag_update'], 'integer'],
            [['Deskripsi_program', 'Tujuan'], 'string'],
            [['Tanggal_pelaksanaan'], 'safe'],
            [['Nama_Program'], 'string', 'max' => 100],
            [['No_Reg'], 'exist', 'skipOnError' => true, 'targetClass' => IkmbdgAnggota::className(), 'targetAttribute' => ['No_Reg' => 'No_Reg']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Reg' => 'No  Reg',
            'Kd_program' => 'Kd Program',
            'Nama_Program' => 'Nama  Program',
            'Deskripsi_program' => 'Deskripsi Program',
            'Tanggal_pelaksanaan' => 'Tanggal Pelaksanaan',
            'Tujuan' => 'Tujuan',
            'flag_update' => 'Flag Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoReg()
    {
        return $this->hasOne(IkmbdgAnggota::className(), ['No_Reg' => 'No_Reg']);
    }
}
