<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasController extends Controller
{
    public function create()
    {
        $url = "https://apiservice.mol.gov.tw/OdService/rest/datastore/A17000000J-020066-EwR";
        $json = json_decode(file_get_contents($url), true);
        dd($json);
    }
}
