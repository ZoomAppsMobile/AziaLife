<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $file
 * @property string $file_kz
 * @property string $file_en
 * @property integer $year
 * @property integer $order
 * @property integer $status
 * @property string $category
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'file', 'file_kz', 'file_en', 'order', 'status', 'category'], 'required'],
            [['year', 'order'], 'integer'],
            [['category', 'status'], 'string'],
            [['title', 'title_kz', 'title_en', 'file', 'file_kz', 'file_en'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок Kz',
            'title_en' => 'Заголовок En',
            'file' => 'Документ',
            'file_kz' => 'Документ Kz',
            'file_en' => 'Документ En',
            'year' => 'Год',
            'order' => 'Порядок',
            'status' => 'Статус',
            'category' => 'Категории',
        ];
    }
}
