<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailStudents extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'detail_id' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                ),
                'ipk' => array(
                    'TYPE' => 'FLOAT'
                ),
                'total_sks' => array(
                    'TYPE' => 'INT'
                ),
                'studentsid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                )
            )            
        );

        $this->forge->addKey('detail_id',true);
        $this->forge->addForeignKey('studentsid','students','idstudent');
        $this->forge->createTable('detail_students');
    }

    public function down()
    {
        $this->forge->dropTable('detail_students');
    }
}
