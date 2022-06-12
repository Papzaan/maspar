<?php

namespace App\Controllers;

class Ormas extends BaseController
{
    public function index()
    {
        return view('layout/ormas');
    }
    public function tambah()
    {
        return view('layout/tambah_ormas');
    }

}
