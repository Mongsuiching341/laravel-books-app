<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simplecontroller extends Controller
{



    //question one

    function getUserName(Request $request)
    {
        $name = $request->get('name');
        return $name;
    }

    //question two
    function getUserAgent(Request $request)
    {
        $userAgent = $request->header('user-agent');
        return $userAgent;
    }

    //question three

    function pageQuery(Request $request)
    {
        $page = $request->query('page', null);

        return $page;
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

    //qu 5

    function handleFile(Request $request)
    {
        $avatar =  $request->file('avatar');
        $avatar->move(public_path('upload'), $avatar->getClientOriginalName());
        return 'file uploaded successfully';
    }


    // qu 6

    function cookieRemTok(Request $request)
    {
        return $request->cookie('remember_token', null);
    }

    //question 7

    function submit(Request $request)
    {

        $email = $request->input('email');

        $jsonData = [
            "success" => true,
            "message" => "Form submitted successfully.",
            "email"   => $email,
        ];

        return response()->json($jsonData);
    }
}
