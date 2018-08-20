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
    public $path = "images/offices/";
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
            [['name', 'status', 'latitude', 'longitude', 'city_id'], 'required'],
            [['status', 'city_id'], 'integer'],
            [['phone', 'address', 'time', 'email'], 'string', 'max' => 255],
            [['latitude', 'longitude'], 'string', 'max' => 20],
            [['img'], 'file', 'extensions'=>'jpg, gif, png, jpeg'],
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
            'status' => 'Статус',
            'latitude' => 'Широта',
            'longitude' => 'Долгота',
            'city_id' => 'Город',
            'img' => 'Картинка',
            'phone' => 'Телефон',
            'email' => 'Почта',
            'address' => 'Адрес',
            'time' => 'Время работы',
        ];
    }

    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }
}
