<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $url
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'name_en', 'name_kz'], 'required'],
            [['text', 'description'], 'string'],
            [['sort_top', 'sort_footer', 'parent_id', 'footer', 'top', 'status'], 'integer'],
            [['name', 'name_en', 'name_kz', 'title', 'keywords', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'name_en' => 'Название En',
            'name_kz' => 'Название Kz',
            'text' => 'Текст',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'keywords' => 'Ключевые слова',
            'url' => 'Url',
            'status' => 'Статус',
        ];
    }

//    public function beforeSave($insert){
//        if($this->isNewRecord) {
//            $model = Menu::find()->orderBy('sort DESC')->one();
//            if ($this->id != $model->id) {
//                $this->sort = $model->sort + 1;
//            }
//        }
//        return parent::beforeSave($insert);
//    }
}
