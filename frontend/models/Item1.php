<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "item1".
 *
 * @property int $id
 * @property string $Nama
 * @property int $harga
 * @property string $descripsi
 * @property int $id_category
 *
 * @property Item1Category $category
 */
class Item1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'harga', 'descripsi', 'id_category'], 'required'],
            [['harga', 'id_category'], 'integer'],
            [['Nama'], 'string', 'max' => 25],
            [['descripsi'], 'string', 'max' => 225],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Item1Category::className(), 'targetAttribute' => ['id_category' => 'id']],
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
            'harga' => 'Harga',
            'descripsi' => 'Descripsi',
            'id_category' => 'Id Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Item1Category::className(), ['id' => 'id_category']);
    }
}
