<?php

use yii\db\Migration;

class m170308_153719_14_type_users extends Migration {

    public function up() {
        $this->createTable("table_type01", [
            'id' => "integer primary key auto_increment",
            'fname' => "varchar(100)", 'lname' => 'varchar(100)',
            'salary' => 'DECIMAL(13,2)'
        ]);
        $this->createTable("table_type02", [
            'id' => "integer primary key auto_increment",
            'fname' => "varchar(100)", 'lname' => 'varchar(100)',
            'salary' => 'DECIMAL(13,2)'
        ]);
        $this->createTable("table_type03", [
            'id' => "integer primary key auto_increment",
            'fname' => "varchar(100)", 'lname' => 'varchar(100)',
            'salary' => 'DECIMAL(13,2)'
        ]);
        $this->createTable("table_type04", [
            'id' => "integer primary key auto_increment",
            'fname' => "varchar(100)", 'lname' => 'varchar(100)',
            'salary' => 'DECIMAL(13,2)'
        ]);
        $this->createTable("table_type05", [
            'id' => "integer primary key auto_increment",
            'fname' => "varchar(100)", 'lname' => 'varchar(100)',
            'salary' => 'DECIMAL(13,2)'
        ]);
        $this->createTable("table_type06", [
            'id' => "integer primary key auto_increment",
            'fname' => "varchar(100)", 'lname' => 'varchar(100)',
            'salary' => 'DECIMAL(13,2)'
        ]);
        for($a=1;$a<=10;$a++){
            for($b=1;$b<=6;$b++){
                $this->insert("table_type0".$b,["fname"=>"fname".$a,"lname"=>"lname".$a,"salary"=>($a*$b*100)]);
            }
        }
        
    }

    public function down() {
        $this->dropTable("table_type01");
        $this->dropTable("table_type02");
        $this->dropTable("table_type03");
        $this->dropTable("table_type04");
        $this->dropTable("table_type05");
        $this->dropTable("table_type06");
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
