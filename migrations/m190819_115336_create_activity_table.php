<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activity}}`.
 */
class m190819_115336_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activity', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('activity');
    }
}
