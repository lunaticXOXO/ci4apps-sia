<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subject extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idsubject' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                ),
                'name' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                ),
                'sks' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                ),
                'majorid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 7
                ),
                'lecturerid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                )
            )
        );

        $this->forge->addKey('idsubject',true);
        $this->forge->addForeignKey('majorid','majorstudy','idmajor');
        $this->forge->addForeignKey('lecturerid','lecturer','idlecturer');
        $this->forge->createTable('subject');
    }

    public function down()
    {
        $this->forge->dropTable('subject');
    }
}
