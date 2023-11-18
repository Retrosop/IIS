<?php

use yii\db\Migration;

/**
 * Class m231005_233139_mythird
 */
class m231005_233139_mythird extends Migration
{
    /* /**
     * {@inheritdoc}
     */ 
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231005_233139_mythird cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
	$this->addForeignKey(
            'fk-post-category_id',
            'drinks_',
            'id_groups',
            'groups_',
            'id_groups',
            'CASCADE'
        );
    }
    

    public function down()
    {
        echo "m231005_233139_mythird cannot be reverted.\n";

        return false;
    }
   
}
