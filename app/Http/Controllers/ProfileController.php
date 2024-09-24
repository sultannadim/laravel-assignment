<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        
        $id = $request->query('id');

        
        $name = "Donal Trump";
        $age = "75";

        
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $cookie_minutes = 1;
        $cookie_path = '/';
        $cookie_domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        
        $cookie = cookie($cookie_name, $cookie_value, $cookie_minutes, $cookie_path, $cookie_domain, $secure, $httpOnly);

        
        return response()->json($data, 200)->cookie($cookie);
    }
}
