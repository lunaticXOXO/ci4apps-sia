<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField(array(

            'idstudent' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
            ),

            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            ),

            'adress' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),

            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => '15'
            ),

            'telephone' => array(
                'type' => 'VARCHAR',
                'constraint' => '15'
            ),

            'borndate' => array(
                'type' => 'DATETIME'
            ),

            'majorid' => array(
                'type' => 'VARCHAR',
                'constraint' => 7
            ),

            'sessionid' => array(
                'TYPE' => 'VARCHAR',
                'CONSTRAINT' => 10
            )

        ));

        $this->forge->addKey('idstudent',TRUE);
        $this->forge->addForeignKey('majorid','majorstudy','idmajor');
        $this->forge->addForeignKey('sessionid','users','iduser');
        $this->forge->createTable('students');

      
    }

    public function down()
    {
        $this->forge->dropTable('students');
        
    }
}