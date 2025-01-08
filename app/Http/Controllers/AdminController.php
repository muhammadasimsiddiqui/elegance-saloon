<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function error404()
        {
            return view('backend.404');
        }
    
        public function blank()
        {
            return view('backend.blank');
        }
    
        public function button()
        {
            return view('backend.button');
        }
    
        public function chart()
        {
            return view('backend.chart');
        }
    
        public function element()
        {
            return view('backend.element');
        }
    
        public function form()
        {
            return view('backend.form');
        }
    
        public function index()
        {
            return view('backend.index');
        }
    
        public function signin()
        {
            return view('backend.signin');
        }
    
        public function signup()
        {
            return view('backend.signup');
        }
    
        public function table()
        {
            return view('backend.table');
        }
    
        public function typography()
        {
            return view('backend.typography');
        }
    
        public function widget()
        {
            return view('backend.widget');
        }

        public function inquiries()
        {
            return view('backend.inquiries');
        }

        public function orders()
        {
            return view('backend.orders');
        }

        public function reports()
        {
            return view('backend.reports');
        }

        public function accounts()
        {
            return view('backend.accounts');
        }

        public function permissions()
        {
            return view('backend.permissions');
        }
    
        public function createaccount()
        {
            return view('backend.create-account');
        }

        public function systemConfiguration()
        {
            return view('backend.system-configuration');
        }
    
        public function dataBackupRestore()
        {
            return view('backend.data-backup-restore');
        }
    
 
    
}
