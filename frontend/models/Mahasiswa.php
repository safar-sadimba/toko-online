<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $Nim
 * @property string $Nama
 * @property string $jurusan
 *
 * @property Matakuliah $matakuliah
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'jurusan'], 'required'],
            [['Nama', 'jurusan'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nim' => 'Nim',
            'Nama' => 'Nama',
            'jurusan' => 'Jurusan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatakuliah()
    {
        return $this->hasOne(Matakuliah::className(), ['id_matakulia' => 'Nim']);
    }
}
