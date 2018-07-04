<?php

namespace backend\models;

use Yii;

class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'thumb', 'image', 'content', 'content_kz', 'content_en', 'url', 'order', 'status', 'category'], 'required'],
            [['content', 'content_kz', 'content_en', 'status'], 'string'],
            [['order', 'category'], 'integer'],
            [['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'thumb', 'image', 'note', 'note_kz', 'note_en', 'url'], 'string', 'max' => 512],
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
            'description' => 'Описание',
            'description_kz' => 'Описание Kz',
            'description_en' => 'Описание En',
            'thumb' => 'Маленькаяя картинка',
            'image' => 'Большая картинка',
            'content' => 'Конткент',
            'content_kz' => 'Контент Kz',
            'content_en' => 'Контент En',
            'note' => 'Заметка',
            'note_kz' => 'Заметка Kz',
            'note_en' => 'Заметка En',
            'url' => 'Ссылка',
            'order' => 'Порядок',
            'status' => 'Статус',
            'category' => 'Категории',
        ];
    }
}
