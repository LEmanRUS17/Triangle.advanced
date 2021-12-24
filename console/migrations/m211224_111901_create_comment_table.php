<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m211224_111901_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id'         => $this->primaryKey(),
            'text'       => $this->string(255),
            'user_id'    => $this->string(11),
            'article_id' => $this->string(11),
            'status'     => $this->string(11),
            'date'       => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }
}
