<?php

namespace app\models;

use Yii;

class Users extends UsersBase implements \yii\web\IdentityInterface
{
    public $password;
    
    const SCENARIO_SIGNUP='signup';
    const SCENARIO_SIGNIN='signin';

    public function scenarioSignup(): self{
        $this->setScenario(self::SCENARIO_SIGNUP);
        return $this;
    }
    
    public function scenarioSignin(): self{
        $this->setScenario(self::SCENARIO_SIGNIN);
        return $this;
    }

    public function rules() {
        return array_merge([
            ['password', 'string', 'min'=>5],
            ['email', 'exist', 'on' => self::SCENARIO_SIGNIN],
            [['email'], 'unique', 'on'=> self::SCENARIO_SIGNUP],
        ], parent::rules()) ;
    }

    public function getAuthKey() {
        return $this->auth_key;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getUsername(){
        return $this->email;
    }

    public function validateAuthKey($authKey): bool {
        return $this->auth_key == $authKey;
    }

    public static function findIdentity($id) {
        return Users::find()->andWhere(['id'=>$id])->cache(10)->one();
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        
    }

}
