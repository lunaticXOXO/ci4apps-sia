<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Parents extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idparents' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5,
                ),

                'name' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25,
                ),
                'email' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                ),
                'adress' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 50
                ),

                'city' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => '15'
                ),
                'telephone' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 15
                ),
                'studentsid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                )
            )
        );

        $this->forge->addKey('idparents',true);
        $this->forge->addForeignKey('studentsid','students','idstudent');
        $this->forge->createTable('parents',true);
    }

    public function down()
    {
        $this->forge->dropTable('parents',true);
    }
}