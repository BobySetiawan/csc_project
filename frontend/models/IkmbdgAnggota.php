<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ikmbdg_anggota".
 *
 * @property int $No_Reg
 * @property string $Nama_Lengkap
 * @property string $Nama_Panggilan
 * @property string $Username
 * @property string $Password
 * @property string $TTL
 * @property string $tanggal
 * @property string $Jk
 * @property string $Agama
 * @property string $Alamat_asal
 * @property string $Alamat_bdg
 * @property string $asaldaerah
 * @property string $Email
 * @property string $No_Hp
 * @property string $Universitas
 * @property string $Fakultas
 * @property string $Jurusan
 * @property string $Hobby
 * @property string $Gambar
 * @property string $Level
 *
 * @property TblProgram[] $tblPrograms
 */
class IkmbdgAnggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ikmbdg_anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_Lengkap', 'Nama_Panggilan', 'Username', 'Password', 'TTL', 'tanggal', 'Jk', 'Agama', 'Alamat_asal', 'Alamat_bdg', 'asaldaerah', 'Email', 'No_Hp', 'Universitas', 'Fakultas', 'Jurusan', 'Hobby', 'Gambar', 'Level'], 'required'],
            [['tanggal'], 'safe'],
            [['Alamat_asal', 'Alamat_bdg'], 'string'],
            [['Nama_Lengkap', 'Password', 'Email', 'Hobby'], 'string', 'max' => 50],
            [['Nama_Panggilan', 'Jk', 'Agama', 'asaldaerah'], 'string', 'max' => 30],
            [['Username', 'Universitas', 'Fakultas', 'Jurusan'], 'string', 'max' => 40],
            [['TTL'], 'string', 'max' => 100],
            [['No_Hp'], 'string', 'max' => 12],
            [['Gambar'], 'string', 'max' => 1000],
            [['Level'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Reg' => 'No  Reg',
            'Nama_Lengkap' => 'Nama  Lengkap',
            'Nama_Panggilan' => 'Nama  Panggilan',
            'Username' => 'Username',
            'Password' => 'Password',
            'TTL' => 'Ttl',
            'tanggal' => 'Tanggal',
            'Jk' => 'Jk',
            'Agama' => 'Agama',
            'Alamat_asal' => 'Alamat Asal',
            'Alamat_bdg' => 'Alamat Bdg',
            'asaldaerah' => 'Asaldaerah',
            'Email' => 'Email',
            'No_Hp' => 'No  Hp',
            'Universitas' => 'Universitas',
            'Fakultas' => 'Fakultas',
            'Jurusan' => 'Jurusan',
            'Hobby' => 'Hobby',
            'Gambar' => 'Gambar',
            'Level' => 'Level',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPrograms()
    {
        return $this->hasMany(TblProgram::className(), ['No_Reg' => 'No_Reg']);
    }
}
