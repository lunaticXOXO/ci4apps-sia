<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lecturer extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idlecturer' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5,
                ),

                'name' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => '25'
                ),

                'adress' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => '25'
                ),

                'city' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => '10'
                ),

                'telephone' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => '25'
                ),
                'levelid' => array(
                    'TYPE' => 'INT',
                    'CONSTRAINT' => 5
                ),
                'majorid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 7
                ),
                'sessionid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 10
                )
            )
        );

        $this->forge->addKey('idlecturer',true);
        $this->forge->addForeignKey('levelid','levellecturer','idlevel');
        $this->forge->addForeignKey('majorid','majorstudy','idmajor');
        $this->forge->addForeignKey('sessionid','users','iduser');
        $this->forge->createTable('lecturer');
    }

    public function down()
    {
        $this->forge->dropTable('lecturer');
    }
}