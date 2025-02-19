<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $nama = 'fandy';
        $nim = '2341720165';
        return $nama." ". $nim;
    }
}
