<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faculty extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idfaculty' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                ),

                'namafakultas' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 20
                ),

                'year' => array(
                    'TYPE' => 'INT',
                    'CONSTRAINT' => 5,
                )
            )
        );

        $this->forge->addKey('idfaculty',true);
        $this->forge->createTable('faculty');
    }

    public function down()
    {
        $this->forge->dropTable('faculty');
    }
}