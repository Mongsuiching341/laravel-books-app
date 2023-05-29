<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simplecontroller extends Controller
{


    public function __construct()
    {
        $this->middleware('demo');
    }


    //question two
    function getUserAgent(Request $request)
    {
        $headers = $request->header();
        return $headers;
    }



    //question four
    function jsonRes()
    {

        $res = [
            "message" => "success",
            "data"   => [
                "name" => "john doe",
                "age"  => 25
            ]
        ];

        return response()->json($res);
    }
}
