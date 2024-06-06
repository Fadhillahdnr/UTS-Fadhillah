<?php

namespace App\Controllers;

use App\Models\ModelHome;

class Home extends BaseController
{
    protected $FADHILLAH;

    public function __construct()
    {
        $this->FADHILLAH = new ModelHome();
    }

    public function index()
    {
        $getdata = $this->FADHILLAH->getdata();
        $fadhil = array(
            'fadhillah' => $getdata
        );

        return view('home', $fadhil);
    }
}
