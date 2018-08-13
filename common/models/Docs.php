<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "docs".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $file
 * @property int $sort
 */
class Docs extends \yii\db\ActiveRecord
{
    public $files;
    public $path = 'images/docs/';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'file', 'sort'], 'required'],
            [['text'], 'string'],
            [['sort'], 'integer'],
            [['title', 'file'], 'string', 'max' => 255],
            ['files', 'each', 'rule' => ['file']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'text' => 'Текст',
            'file' => 'Файл',
            'sort' => 'Сортировка',
        ];
    }

    public function upload()
    {
        $time = time();
        $this->img->saveAs($this->path. $time . $this->img->baseName . '.' . $this->img->extension);
        return $time . $this->img->baseName . '.' . $this->img->extension;
    }

    public function beforeSave($insert){
        if($this->isNewRecord) {
            $model = Docs::find()->orderBy('sort DESC')->one();
            if (!$model || $this->id != $model->id) {
                $this->sort = $model->sort + 1;
            }
        }
        return parent::beforeSave($insert);
    }
}
