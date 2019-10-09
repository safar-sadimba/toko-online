<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sofenir".
 *
 * @property int $id_pelanggan
 * @property string $Nama
 * @property int $Alamat
 * @property string $Kontak
 *
 * @property Item $item
 */
class sofenir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sofenir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'Alamat', 'Kontak'], 'required'],
            [['Alamat'], 'integer'],
            [['Nama'], 'string', 'max' => 20],
            [['Kontak'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pelanggan' => 'Id Pelanggan',
            'Nama' => 'Nama',
            'Alamat' => 'Alamat',
            'Kontak' => 'Kontak',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id_barang' => 'id_pelanggan']);
    }
}
