<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usertype extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idtype' => array(
                    'TYPE' => 'INT',
                    'CONSTRAINT' => 5
                ),

                'description' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                )
            )
        );

        $this->forge->addKey('idtype',true);
        $this->forge->createTable('usertype');
    }

    public function down()
    {
        $this->forge->dropTable('usertype');
    }
}
