<?php


namespace app\components;

class AuthComponent extends \yii\base\Component{
    //put your code here
    
    public function signin(\app\models\Users &$model):bool{
        $model->scenarioSignin();
        
        if(!$model->validate(['email', 'password'])){
            return false;
        }
        
        $user= $this->getUserByEmail($model->email);
        
        if(!$this->validatePassword($model->password, $user->password_hash)){
            $model->addError('password','wrong password');
            return false;
        }
        
        return \Yii::$app->user->login($user, 3600);
        
    }
    
    private function validatePassword($password, $password_hash):bool{
        return \Yii::$app->security->validatePassword($password, $password_hash);
    }

        private function getUserByEmail(string $email): ?\app\models\Users{
        return \app\models\Users::find()->andWhere(['email'=>$email])->one();                
    }

        public function signup(\app\models\Users &$user):bool{
        $user->scenarioSignup();
        if (!$user->validate(['email', 'password'])){
            return false;
        }
        
        $user->password_hash= $this->genHashPassword($user->password);
        
        if(!$user->save()){
            return false;
        }
        
        return true;
    }
    
    private function genHashPassword($password): string{
        return \Yii::$app->security->generatePasswordHash($password);
    }
}
