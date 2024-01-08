<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Majorstudy extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idmajor' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 7,
                ),
                'majorname' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                ),
                'akreditasi' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 10
                ),
                'tahunsk' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 10
                ),
                'facultyid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                )
            )
        );

        $this->forge->addKey('idmajor',true);
        $this->forge->addForeignKey('facultyid','faculty','idfaculty');
        $this->forge->createTable('majorstudy');
    }

    public function down()
    {
        $this->forge->dropTable('majorstudy');
    }
}