<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
        public function home()
        {
             $Stylist =  User::where('designation', 'stylist')->get(); 

             $Services = Service::all(); 
            return view('frontend.home',['Stylist'=> $Stylist, 'Services'=> $Services]);
        }
    
        public function about()
        {
            return view('frontend.about');
        }
    
        public function services()
        {           
            $services = Service::all();            
            return view('frontend.services', compact('services'));        
        }
    
        public function appointment()
        { 
            $Stylist =  User::where('designation', 'stylist')->get(); 
            $Services = Service::all(); 
            // $Appointments = Appointment::where('user_id', 1)->get(); 
$Appointments= DB::table('appointments')
    ->join('users', 'appointments.user_id', '=', 'users.id')
    ->join('services', 'appointments.service_id', '=', 'services.id')
    ->where('appointments.user_id', Auth::id())
    ->get();

    // return $Appointments;

            return view('frontend.appointment',['Stylist'=> $Stylist, 'Services'=> $Services,'Appointments'=>$Appointments]);
        }
    
        public function contact()
        {
            return view('frontend.contact');
        }

        public function bookAppointment(Request $req)
        {
            // return $req-> all();
Appointment::create($req-> all());
// return "hogaya";
             return redirect('/appointment'); ;
        }


        public function signinform(Request $req)
        {
       
        $email = $req->email;
        $password = $req->password;



        if (Auth::attempt(['email' => $email, 'password' => $password])) {
           if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
return redirect('dashboard');
}else{
return redirect('/');
}
        } else {
            return 'try again';
        }

        }
     public function userlogout(Request $req)

        {
                                Auth::logout();

                              return redirect('/');

        }

        

  
}
