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
    
    public $email;
    public $useNotification;
    
    public $repeatedType;
    
    public $files;

        const REPEATED_TYPE = [
        1 => 'Каждый день',
        2 => 'Каждую неделю',
        3 => 'Каждый месяц'
    ];

//    public function beforeValidate() {
//        $date = \DateTime::createFromFormat('d.m.Y', $this->dateStart);
//        if($date){
//            $this->dateStart =  null;
//        }
//        $this->title =  null;
//        parent::beforeValidate();
//    }

    public function rules(){
        return [
            ['title', 'trim'],
            [['title','dateStart'], 'required'],
            ['description', 'string', 'min' => 5, 'max' => 200],
            ['category', 'string'],
            ['dateStart', 'date', 'format'=> 'php:Y-m-d'],
            [['isBlocked', 'isRepeat', 'useNotification'], 'boolean'],
            ['email', 'email'],
            ['email','required', 'when' => function($model){
                return $model->useNotification?true:false;
            }],
            ['repeatedType', 'in', 'range' => array_keys(self::REPEATED_TYPE)],
            [['files'], 'file', 'extensions' => ['jpg', 'png'],'maxFiles' => 0],
        ];
    }

    public function attributeLabels(){
        return [
            'title' => 'Название события',
            'description' => 'Описание',
            'category' => 'Категория',
            'dateStart' => 'Дата начала',
            'isBlocked' => 'Весь день',
            'isRepeat' => 'Повторяется',
            'useNotification' => 'Уведомлять по email',
            'email' => 'Email для уведомлений'
        ];
    }
}