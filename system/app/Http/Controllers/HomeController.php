<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    function showBeranda(){
        return view('beranda');
    }
    function showArtikel(){
        return view('artikel');
    }
    function showKontak(){
        return view('kontakclient');
    }
    function showTentang(){
        return view('tentang');
    }
    function showPost(){
        return view('post');
    }
}