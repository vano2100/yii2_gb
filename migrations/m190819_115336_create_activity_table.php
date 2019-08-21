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
            'title' => $this->string(150)->notNull(),
            'dateStart' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'description' => $this->text(),
            'isBlocked' => $this->boolean()->notNull()->defaultValue(0),
            'useNotification' => $this->boolean()->notNull()->defaultValue(0),
            'email' => $this->string(150),
            'createAt' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'isDeleted' => $this->boolean()->notNull()->defaultValue(0),
        ]);
        
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'email' => $this->string(150)->notNull(),
            'password_hash' => $this->string(150)->notNull(),
            'token' => $this->string(150),
            'auth_key' => $this->string(150),
            'createAt' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'isDeleted' => $this->boolean()->notNull()->defaultValue(0),
        ]);
        
        $this->createIndex('userEmailUK', 'users', 'email', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
        $this->dropTable('activity');        
    }
}
