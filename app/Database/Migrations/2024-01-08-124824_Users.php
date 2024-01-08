<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'iduser' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 10,
                ),

                'namalengkap' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                ),

                'username' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                ),

                'email' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                ),

                'password' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 25
                ),
                'typeid' => array(
                    'TYPE' => 'INT',
                    'CONSTRAINT' => 5
                )
            )
        );

        $this->forge->addKey('iduser',true);
        $this->forge->addForeignKey('typeid','usertype','idtype');
        $this->forge->createTable('users');

    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
