<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\jsonResponse;


class UserController extends Controller
{
   //function for the route num 1
    function saveName(Request $request):string
    {
        $name = $request->input(key:'name');
        return " {$name}";
    }
    //function for the route num 2
    function getUserAgent(Request $request)
    {
        $name       = $request->input(key:'name');
        $useragent  = $request->header(key:'useragent'); 
        return  $name ." And ". $useragent;
    }
    //function for the route num 3
    function getPage(Request $request)
    {
        $page = $request->query('page', null);

    }
    //function for the route num 4
    function jsonResponse()
    {
        $code=201;
        $response = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];

        return response()->json($response,$code);
    }

    //function for the route num 5
    function uploadAvatar(Request $request):bool
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();

            $path = $file->storeAs('uploads', $filename);
            $file->move(public_path('uploads'),$filename);
            return true;
        }
    }
    //function for the route num 6
    function getRememberToken(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
    }
    //function for the route num 7
    function getEmail(Request $request) {
        $email = $request->input('email');
    
        // You can now use the $email variable for further processing or storing in your application.
    
        $response = [
            'success' => true,
            'message' => 'Form submitted successfully.'
        ];
    
        //return response()->json($response, Response::HTTP_OK)." The Email address is  {$email}.";
        return response()->json($response, Response::HTTP_OK);
    }

}
