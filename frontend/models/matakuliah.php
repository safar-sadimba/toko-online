<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matakuliah".
 *
 * @property int $id_matakulia
 * @property string $Nama
 * @property string $dosen
 *
 * @property Mahasiswa $matakulia
 */
class matakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'dosen'], 'required'],
            [['Nama', 'dosen'], 'string', 'max' => 25],
            [['id_matakulia'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['id_matakulia' => 'Nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_matakulia' => 'Id Matakulia',
            'Nama' => 'Nama',
            'dosen' => 'Dosen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatakulia()
    {
        return $this->hasOne(Mahasiswa::className(), ['Nim' => 'id_matakulia']);
    }
}
