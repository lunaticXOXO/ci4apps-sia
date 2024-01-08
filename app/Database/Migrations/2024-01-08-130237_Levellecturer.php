<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Levellecturer extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idlevel' => array(
                    'TYPE' => 'INT',
                    'CONSTRAINT' => 5,
                    'AUTO_INCREMENT' => true
                ),

                'description' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                )
            )
        );

        $this->forge->addKey('idlevel',true);
        $this->forge->createTable('levellecturer');
    }

    public function down()
    {
        $this->forge->dropTable('levellecturer');
    }
}