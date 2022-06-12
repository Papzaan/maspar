<?php

namespace App\Controllers;

class Grafis extends BaseController
{
    public function index()
    {
        return view('layout/suara');
    }
    public function ormas()
    {
        return view('layout/ormas_parpol');
    }
    public function data()
    {
        return view('layout/data_pemilih');
    }

}
