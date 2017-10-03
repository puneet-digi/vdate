<?php

use yii\db\Migration;

/**
 * Handles the creation of table `metakey`.
 */
class m171003_130244_create_metakey_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%metakey}}', [
            'id' => $this->primaryKey(),
            'key' => $this->string(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11)                
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%metakey}}');
    }
}
