<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users = [
            [
                "name" => "John Doe",
                "age" => 18
            ],
            [
                "name" => "Jane Doe",
                "age" => 20
            ],
            [
                "name" => "Ron Kuvelt",
                "age" => 17
            ]
        ];
        return view('dashboard',['users'=>$users]);
    }
}
