<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property int $order_id
 * @property int $item_id
 *
 * @property Order $order
 * @property Item1 $item
 */
class order_item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'item_id'], 'required'],
            [['order_id', 'item_id'], 'integer'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item1::className(), 'targetAttribute' => ['item_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'item_id' => 'Item ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item1::className(), ['id' => 'item_id']);
    }
}
