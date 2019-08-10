<?php

namespace app\models;

use yii\base\Model;

class Activity extends Model{

    public $title;
    public $description;
    public $category;
    public $dateStart;
    public $isBlocked;
    public $isRepeat;

    public function rules(){
        return [
            ['title', 'required'],
            ['description', 'string', 'min' => 5],
            ['category', 'string'],
            ['dateStart', 'string'],
            ['isBlocked', 'boolean'],
            ['isRepeat', 'boolean']
        ];
    }

    public function attributeLabels(){
        return [
            'title' => 'Название события',
            'description' => 'Описание',
            'category' => 'Категория',
            'dateStart' => 'Дата начала',
            'isBlocked' => 'Весь день',
            'isRepeat' => 'Повторяется'
        ];
    }
}