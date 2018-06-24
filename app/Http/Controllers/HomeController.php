<?php

namespace conexaovida\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    
        public function inicio()
    {
            
        return view('welcome');
    }
    
    public function sobre() {
        
        return view('sobre');
    }
    
    public function cadastrosangue() {
        
        return view('cadastrosangue');
    }
    
    public function cadastroorgaos() {
        
        return view('cadastroorgaos');
    }
    
    public function doadoressangue() {
        
        return view('doadoressangue');
    }
    
    public function doadoresorgaos() {
        
        return view('doadoresorgaos');
    }
    
    public function email() {
        
        return view('email');
    }
    
    public function loginadm() {
        
        return view('loginadm');
    }
    
    
}
