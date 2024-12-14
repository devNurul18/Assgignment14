<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
  public  function index ($id){

        $name = "Donal Trump";
        $age = "75";


        $data = [
          "id" => $id,
           "name" => $name,
           "age" => $age,
        ];



        //Set COOKIES

       $cookie_name = 'access_token';
       $value = '123-XYZ';
       $minutes = 1;
       $path = '/';
       $domain = $_SERVER['SERVER_NAME'];
       $secure = false;
       $httpOnly = true;

       return response($data, 201)->cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }


}
