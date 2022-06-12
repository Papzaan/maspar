<?php

namespace App\Controllers;

class Parpol extends BaseController
{
    public function index()
    {
        $SidomasparModel = new \App\Models\SidomasparModel();
        return view('layout/parpol');
    }
    public function tambah()
    {
        return view('layout/tambah_parpol');
    }
    public function save()
    {
        dd($this->request->getVar());
    }
}
