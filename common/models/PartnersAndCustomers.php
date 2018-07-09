<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "partners_and_customers".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_en
 * @property string $title_kz
 * @property string $text
 * @property string $text_en
 * @property string $text_kz
 * @property string $doc
 * @property string $doc_en
 * @property string $doc_kz
 * @property string $keywords
 * @property string $description
 * @property string $url
 * @property integer $status
 */
class PartnersAndCustomers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners_and_customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'text_en', 'text_kz'], 'string'],
            [['status'], 'integer'],
            [['title', 'title_en', 'title_kz', 'doc', 'doc_en', 'doc_kz', 'keywords', 'description', 'url'], 'string', 'max' => 255],
            [['url'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'title_en' => 'Title En',
            'title_kz' => 'Title Kz',
            'text' => 'Text',
            'text_en' => 'Text En',
            'text_kz' => 'Text Kz',
            'doc' => 'Doc',
            'doc_en' => 'Doc En',
            'doc_kz' => 'Doc Kz',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'url' => 'Url',
            'status' => 'Status',
        ];
    }
}
