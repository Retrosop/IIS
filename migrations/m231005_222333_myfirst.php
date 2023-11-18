<?php

use yii\db\Migration;

/**
 * Class m231005_222333_myfirst
 */
class m231005_222333_myfirst extends Migration
{
   /*  /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    // public function safeDown()
    // {
        // echo "m231005_222333_myfirst cannot be reverted.\n";

        // return false;
    // } */

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
		 $this->createTable('groups_', [
            'id_groups' => $this->primaryKey(),
            'nazvanie' => $this->string(50)
		]);
		

    }

    public function down()
    {
        echo "m231005_222333_myfirst cannot be reverted.\n";

        return false;
    }
   
}
