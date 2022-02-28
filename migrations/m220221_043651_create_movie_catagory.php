<?php

use yii\db\Migration;

/**
 * Class m220221_043651_create_movie_catagory
 */
class m220221_043651_create_movie_catagory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movie_cat}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'name_en' => $this->string()->notNull(),


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
        $this->dropTable('{{%movie_cat}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220221_043651_create_movie_catagory cannot be reverted.\n";

        return false;
    }
    */
}
