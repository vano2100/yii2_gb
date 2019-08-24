<?php

namespace app\rules;

class ViewEditOwnerActivityRule extends \yii\rbac\Rule{
    //put your code here
    public $name = 'ViewEditOwnerActivityRule';


    public function execute($user, $item, $params) {
        $activity=$params['activity'];
        return $user==$activity->user_id;
    }

}
