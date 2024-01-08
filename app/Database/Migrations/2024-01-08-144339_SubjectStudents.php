<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubjectStudents extends Migration
{
    public function up()
    {
        $this->forge->addField(
            array(

                'id' => array(
                    'TYPE' => 'INT',
                    'AUTO_INCREMENT' => true
                ),

                'studentsid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                ),
                'lecturerid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5
                ),
                'subjectid' => array(
                    'TYPE' => 'VARCHAR',
                    'CONSTRAINT' => 5,
                ),
                'score' => array(
                    'TYPE' => 'FLOAT'
                ),
            )
        );

        $this->forge->addKey('id',true);
        

        $this->forge->addForeignKey('studentsid','students','idstudent');
        $this->forge->addForeignKey('lecturerid','lecturer','idlecturer');
        $this->forge->addforeignKey('subjectid','subject','idsubject');

        $this->forge->createTable('subject_students');

    }

    public function down()
    {
        $this->forge->dropTable('subject_students');
    }
}
