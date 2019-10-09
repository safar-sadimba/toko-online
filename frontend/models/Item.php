<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id_barang
 * @property string $Nama_barang
 * @property string $jumlah_barang
 *
 * @property Sofenir $barang
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_barang', 'jumlah_barang'], 'required'],
            [['Nama_barang'], 'string', 'max' => 20],
            [['jumlah_barang'], 'string', 'max' => 25],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Sofenir::className(), 'targetAttribute' => ['id_barang' => 'id_pelanggan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'Nama_barang' => 'Nama Barang',
            'jumlah_barang' => 'Jumlah Barang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Sofenir::className(), ['id_pelanggan' => 'id_barang']);
    }
}
