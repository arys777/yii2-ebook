<?php

use yii\db\Migration;

/**
 * Handles the creation of table `type`.
 */
class m181112_131802_create_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('type', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('type');
    }
}
