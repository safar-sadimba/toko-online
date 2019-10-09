<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "item1_category".
 *
 * @property int $id
 * @property string $jenis
 * @property string $descrisi
 *
 * @property Item1[] $item1s
 */
class Item1Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item1_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jenis', 'descrisi'], 'required'],
            [['id'], 'integer'],
            [['jenis', 'descrisi'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis' => 'Jenis',
            'descrisi' => 'Descrisi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem1s()
    {
        return $this->hasMany(Item1::className(), ['id_category' => 'id']);
    }
}
