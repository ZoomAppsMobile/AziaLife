<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "offices".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property int $status
 * @property string $latitude
 * @property string $longitude
 * @property int $city_id
 */
class Offices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text', 'status', 'latitude', 'longitude', 'city_id'], 'required'],
            [['text'], 'string'],
            [['status', 'city_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['latitude', 'longitude'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'text' => 'Описание',
            'status' => 'Статус',
            'latitude' => 'Широта',
            'longitude' => 'Долгота',
            'city_id' => 'Город',
        ];
    }

    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }
}
