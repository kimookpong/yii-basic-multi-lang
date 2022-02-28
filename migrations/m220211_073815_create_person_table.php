<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person}}`.
 */
class m220211_073815_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string()->notNull(),
            'fullname_en' => $this->string(),
            'birth_date' => $this->date(),
            'birth_place' => $this->string(),
            'weight' => $this->string(),
            'height' => $this->string(),
            'spouse' => $this->string(),
            'child' => $this->string(),
            'job' => $this->string(),
            'description' => $this->text(),
            'description_eng' => $this->text(),
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
        $this->dropTable('{{%person}}');
    }
}
