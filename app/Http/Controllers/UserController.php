<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        public function home()
        {
            return view('frontend.home');
        }
    
        public function about()
        {
            return view('frontend.about');
        }
    
        public function services()
        {
            return view('frontend.services');
        }
    
        public function appointment()
        {
            return view('frontend.appointment');
        }
    
        public function contact()
        {
            return view('frontend.contact');
        }
  
}
