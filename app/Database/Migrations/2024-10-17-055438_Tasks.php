<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tasks extends Migration
{
    public function up()
    {
        //
        $this->forge->addField(array(
            "id"=>array(
                "type"=>"INT",
                'unsigned' => true,
                "auto_increment"=>TRUE
            ),
            "title"=>array(
                "type"=>"VARCHAR",
                "constraint"=>20,
            ),
            "description"=>array(
                "type"=>"VARCHAR",
                "constraint"=>300,
                "null"=>true
            ),
            "status"=>array(
                "type"=>"BOOLEAN",
            ),
            "created_at"=>array(
                "type"=> "DATETIME"
            )
            ));
        $this->forge->addKey("id",true);
        $this->forge->createTable("tasks");

    }

    public function down()
    {
        //
        $this->forge->dropTable("tasks");
    }
}
