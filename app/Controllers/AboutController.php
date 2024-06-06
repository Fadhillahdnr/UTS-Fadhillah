<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAbout;
use CodeIgniter\HTTP\ResponseInterface;

class AboutController extends BaseController
{
    protected $FADHILLAH;

    public function __construct()
    {
        $this->FADHILLAH = new ModelAbout();
    }

    public function index()
    {
        $getdata = $this->FADHILLAH->getdata();
        $fadhil = array(
            'fadhillah' => $getdata
        );

        return view('about', $fadhil);
    }
}
