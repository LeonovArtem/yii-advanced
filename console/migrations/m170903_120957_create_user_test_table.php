<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_test`.
 */
class m170903_120957_create_user_test_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_test', [
            'id' => $this->primaryKey(),
            'login' => $this->string(191),
            'password' => $this->string(191),
            'first_name' => $this->string(191),
            'last_name' => $this->string(191),
            'email' => $this->string(191),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_test');
    }
}
