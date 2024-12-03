<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%setob}}`.
 */
class m241203_014109_create_setob_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%setob}}', [
            'id' => $this->primaryKey(),
            'nazvanie' => $this->string(15)->notNull(),
            'ip_adres' => $this->string(50)->notNull(),
            'mac_adres' => $this->string()->notNull(),
            'mesto_pol' => $this->string(30)->notNull(),
            'data_ust' => $this->date()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%setob}}');
    }
}
