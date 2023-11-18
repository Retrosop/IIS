<?php

use yii\db\Migration;

/**
 * Class m231005_230324_mytwo
 */
class m231005_230324_mytwo extends Migration
{
/*     /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    public function up()
    {
 $this->createTable('drinks_', [
            'id_drinks' => $this->primaryKey(),
            'nazvanie' => $this->string(),
            'id_groups' => $this->integer(),
			 'cost_price' => $this->integer(),
			]);
			
			$this->createIndex(
            'index_ingredients_idgroups',
            'drinks_',
            'cost_price'
        );
    }

    public function down()
    {
        echo "m231005_230324_mytwo cannot be reverted.\n";

        return false;
    }
   
}
