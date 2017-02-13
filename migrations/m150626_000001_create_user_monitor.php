<?php
use yii\db\Migration;
use yii\db\Schema;
class m150626_000001_create_user_monitor extends Migration
{
    const TABLE = '{{%user_monitor}}';
    public function up()
    {
        $this->down();
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'created' => $this->integer(),
            'application_identifier' => $this->string(255),
            'user_identifier' => $this->string(255),
            'ip' => $this->string(255),
            'route' => $this->string(255),
            'event' => $this->string(255),
            'description' => $this->string(255)
        ], ($this->db->driverName === 'mysql' ? 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB' : null));
    }


    public function down()
    {
        $this->dropTable(self::TABLE);
    }
}