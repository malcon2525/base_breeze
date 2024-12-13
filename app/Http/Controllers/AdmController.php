<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//breeze
use Illuminate\Routing\Controller;

class AdmController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');  // Protege a área administrativa
    // }
    
    public function index(){
        return view('app.adm.home');
    }
}
