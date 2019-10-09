<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $Date
 * @property int $jumlah
 * @property int $id_castemer
 *
 * @property Castemer $castemer
 * @property OrderItem[] $orderItems
 */
class order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Date', 'jumlah', 'id_castemer'], 'required'],
            [['id', 'jumlah', 'id_castemer'], 'integer'],
            [['Date'], 'safe'],
            [['id'], 'unique'],
            [['id_castemer'], 'exist', 'skipOnError' => true, 'targetClass' => Castemer::className(), 'targetAttribute' => ['id_castemer' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Date' => 'Date',
            'jumlah' => 'Jumlah',
            'id_castemer' => 'Id Castemer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCastemer()
    {
        return $this->hasOne(Castemer::className(), ['id' => 'id_castemer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['order_id' => 'id']);
    }
}
