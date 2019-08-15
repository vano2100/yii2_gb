<?php

namespace app\models;

use yii\base\Model;

class Day extends Model{

    public $isHoliday;
    public $activities = [];


    public function rules(){
        return [
            ['isHoliday', 'boolean']
        ];
    }

    public function attributeLabels(){
        return [

        ];
    }
}