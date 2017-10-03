<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_metadata`.
 */
class m171003_102921_create_user_metadata_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%user_metadata}}', [
            'id' => $this->primaryKey(),
            'metakey_id' => $this->integer(11),
            'meta_value' => $this->string(255),
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
        $this->dropTable('{{%user_metadata}}');
    }
}
