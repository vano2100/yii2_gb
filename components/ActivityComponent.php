<?php

namespace app\components;

use yii\base\Component;
use app\models\Activity;
use yii\helpers\FileHelper;

class ActivityComponent extends Component {

    public $classModel;
    private $fileCounter = 0;

    public function getModel() {
        return new $this->classModel();
    }

    public function createActivity(Activity &$activity): bool {
        
        $activity->files = \yii\web\UploadedFile::getInstances($activity, 'files');
        $activity->user_id = \Yii::$app->user->getId();
        if (!$activity->save()) {
            return false;
        }
        
        if($activity->files){
            $filenames= $this->saveUploadedFiles($activity->files);
            $activity->files = $filenames;
            
        }        
        
        return true;
    }
    
    private function saveUploadedFiles(array $uploadedFiles): array{
        $files = [];
        foreach ($uploadedFiles as $file){
            $filename = $this->genFileName($file);
            $path = $this->getSavePath();
            $file->saveAs($path.$filename);
            $files[] = $filename;
        }
        return $files;
    }
    
    private function getSavePath(){
        FileHelper::createDirectory(\Yii::getAlias('@webroot/images'));
        return \Yii::getAlias('@webroot/images/');
    }

    private function genFileName(\yii\web\UploadedFile $uploadedFile): string
    {
        $this->fileCounter++;
        return time(). "($this->fileCounter)." . $uploadedFile->extension;
    }

}
