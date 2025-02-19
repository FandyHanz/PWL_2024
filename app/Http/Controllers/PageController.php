<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   

    public function about(){
        $nama = 'fandy';
        $nim = '2341720165';
        return $nama." ". $nim;
    }

    public function articles($id){
            return 'Halaman artikel dengan id- ' . $id;
    }
}
