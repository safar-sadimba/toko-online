<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "castemer".
 *
 * @property int $id
 * @property string $Nama
 * @property string $Alamat
 * @property string $Email
 * @property int $Telepon
 * @property int $id_user
 *
 * @property User $user
 * @property Order[] $orders
 */
class Castemer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'castemer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Nama', 'Alamat', 'Email', 'Telepon', 'id_user'], 'required'],
            [['id', 'Telepon', 'id_user'], 'integer'],
            [['Nama'], 'string', 'max' => 25],
            [['Alamat'], 'string', 'max' => 50],
            [['Email'], 'string', 'max' => 15],
            [['id'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nama' => 'Nama',
            'Alamat' => 'Alamat',
            'Email' => 'Email',
            'Telepon' => 'Telepon',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_castemer' => 'id']);
    }
}
