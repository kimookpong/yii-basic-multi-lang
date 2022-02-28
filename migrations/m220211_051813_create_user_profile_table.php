<?php

use yii\db\Migration;

/**
 * Class m220211_051813_create_user_profile_table
 */
class m220211_051813_create_user_profile_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'fullname' => $this->string()->notNull(),
            'auth_key' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),
            'role' => $this->smallInteger(),
            'status' => $this->smallInteger(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->dateTime(),
        ]);

        $this->createIndex('username', 'user', 'username', true);
        $this->createIndex('email', 'user', 'email', true);

        $security = Yii::$app->security;
        $this->batchInsert(
            'user',
            ['username', 'fullname', 'auth_key', 'password_hash', 'email', 'role', 'status', 'created_at'],
            [
                ['admin', 'Administrator', $security->generateRandomString(), $security->generatePasswordHash('admin'), 'admin@admin.com', 10, 1, date("Y-m-d H:i:s")],
                ['demo', 'Demostration', $security->generateRandomString(), $security->generatePasswordHash('demo'), 'demo@admin.com', 1, 1, date("Y-m-d H:i:s")],
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
