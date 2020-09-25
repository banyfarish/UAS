<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'NIM : 1931710001 <br> 
               Nama : Bany Faris Hanafi';
    }
    public function articles(id){
        return 'halaman artikel dengan id '.id;
    }
}
