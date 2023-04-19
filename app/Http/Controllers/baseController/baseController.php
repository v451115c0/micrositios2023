<?php

namespace App\Http\Controllers\baseController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class baseController extends Controller{
    public function index(){
        $results = DB::connection('odbc')->select("SELECT * FROM LAT_MyNIKKEN.dbo.convertApi_key;");
        return $results;

        // $conexion = DB::connection('SQL173');
        //     $datatv = $conexion->select("SELECT * FROM LAT_MyNIKKEN.dbo.convertApi_key;");
        // \DB::disconnect('SQL173');
        // return $datatv;
    }
}
