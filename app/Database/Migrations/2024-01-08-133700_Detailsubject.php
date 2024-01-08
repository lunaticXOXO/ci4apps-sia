<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Detailsubject extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'detail_id' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                ),
                'bobot_tugas' => array(
                    'TYPE' => 'FLOAT'
                ),
                'bobot_kuis' => array(
                    'TYPE' => 'FLOAT'
                ),
                'bobot_uts' => array(
                    'TYPE' => 'FLOAT'
                ),
                'bobot_uas' => array(
                    'TYPE' => 'FLOAT'
                ),
                'bobot_kehadiran' => array(
                    'TYPE' => 'FLOAT'
                ),
                'subjectid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => '5'
                )
            )
        );

        $this->forge->addKey('detail_id',true);
        $this->forge->addForeignKey('subjectid','subject','idsubject');
        $this->forge->createTable('detailsubject');
    }

    public function down()
    {
        $this->forge->dropTable('detailsubject');
    }
}
