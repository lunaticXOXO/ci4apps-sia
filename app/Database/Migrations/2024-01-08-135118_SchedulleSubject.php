<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SchedulleSubject extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(
                'idschedulle' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 15 
                    
                ),
                'days' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 10
                ),
                'time_start' => array(
                    'TYPE' => 'TIME'
                ),
                'time_finish' => array(
                    'TYPE' => 'TIME'
                ),
                'subjectid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                )
            )
        );

        $this->forge->addKey('idschedulle',true);
        $this->forge->addForeignKey('subjectid','subject','idsubject');
        $this->forge->createTable('schedulle_subject');
    }

    public function down()
    {
        $this->forge->dropTable('schedulle_subject');
    }
}
