<?php

use yii\db\Migration;

/**
 * Class m190821_123014_seedDb
 */
class m190821_123014_seedDb extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', [
            'id' => 1,
            'email' => 'test@test.ru',
            'password_hash' => '123456',
        ]);
        
        $this->insert('users', [
            'id' => 2,
            'email' => 'test2@test.ru',
            'password_hash' => '123456',
        ]);
        
        $this->batchInsert('activity', ['title', 'dateStart','user_id'], [
            [Yii::$app->security->generateRandomString(), date('Y-m-d'),1],
            [Yii::$app->security->generateRandomString(), date('Y-m-d'),1],
            [Yii::$app->security->generateRandomString(), date('Y-m-d'),2],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('activity');
        $this->delete('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190821_123014_seedDb cannot be reverted.\n";

        return false;
    }
    */
}
