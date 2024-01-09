<?php

namespace App\Controllers;

class StudentsController extends BaseController
{
    public function view_students()
    {   
        echo view('layouts/main');
        echo view('partials/sidebar');
        echo view('admin/data_mahasiswa');
    }


}   
