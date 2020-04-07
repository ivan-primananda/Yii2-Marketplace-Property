<?php

use yii\db\Migration;

/**
 * Class m200327_135306_create_table_agent
 */
class m200327_135306_create_table_agent extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('agents', [
            'id' => $this->primaryKey(),
            'picture' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'domisili' => $this->string()->notNull(),
            'file_cv' => $this->string()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('agents');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200327_135306_create_table_agent cannot be reverted.\n";

        return false;
    }
    */
}
