<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movie}}`.
 */
class m220211_070645_create_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movie}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'name_en' => $this->string()->notNull(),
            'description' => $this->text(),
            'description_en' => $this->text(),
            'catagory' => $this->string(),
            'director' => $this->string(),
            'writer' => $this->string(),
            'image_path' => $this->string(),


            ## Default Fields ##
            'status' => $this->integer(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->dateTime(),
            'created_user' => $this->integer(),
            'updated_user' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movie}}');
    }
}
