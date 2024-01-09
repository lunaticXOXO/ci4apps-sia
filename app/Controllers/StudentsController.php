<?php

namespace App\Controllers;

class StudentsController extends BaseController
{
    public function view_students()
    {   
        echo view('layouts/main');
        echo view('partials/sidebar');
        echo view('admin/data_mahasiswa');
        echo view('footer/footer');
    }

    public function view_addstudents(){
        echo view('layouts/main');
        echo view('partials/sidebar');
        echo view('admin/add_mahasiswa');
        echo view('footer/footer');
    }

}   
