<?php

use yii\db\Migration;

class m160429_180826_create_workerman_table extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $sql = <<<SQL
CREATE TABLE {{%workerman}} (
 `workerman_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Workerman ID',
 `pid` int(11) unsigned NOT NULL COMMENT '进程ID',
 `name` varchar(255) DEFAULT '' COMMENT '名称',
 `create_timestamp` int(10) unsigned DEFAULT '0' COMMENT '创建时间戳',
 PRIMARY KEY (`workerman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='workerman进程记录';
SQL;
        $this->execute($sql);
    }

    public function safeDown()
    {
        $this->dropTable('{{%workerman}}');
    }
}
