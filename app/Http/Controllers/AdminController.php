<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Models\Service; 
use App\Models\Appointment; 
use App\Models\Inquire;  // Ensure this is correctly referring to the Inquire model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function error404()
    {
        return view('backend.404');
    }

    public function index()
    {

        if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
return view('backend.index');
}else{
return redirect('/');
}
}else{
return redirect('/');
}
    }

     public function logout(Request $req)

        {
                                Auth::logout();

                              return redirect('/signin');

        }

    public function viewServices()
    {


          if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
 $services = Service::all();
        return view('backend.services', compact('services'));
}else{
return view('/');
}
}else{
return redirect('/');
}
       
    }
public function signin()
{
    if (Auth::check()) {
        if (Auth::user()->role == "admin" || Auth::user()->role == "employee" || Auth::user()->role == "customer") {
            return redirect('/'); 
        }
    } else {
        return view('backend.signin'); 
    }
}

    public function signup()
    {
           if (Auth::check()) {
        if (Auth::user()->role == "admin" || Auth::user()->role == "employee" || Auth::user()->role == "customer") {
            return redirect('/'); 
        }
    } else {
         return view('backend.signup'); 
    }
    }

    public function inquiries()
    {

           if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
    
 return view('backend.crudPartials.inquiries.inquiries');
}else{
return view('/');
}
}else{
return redirect('/');
}
    }

    public function appointments()
    {
        $Appointments= DB::table('appointments')
    ->join('users', 'appointments.stylist_id', '=', 'users.id')
    ->join('services', 'appointments.service_id', '=', 'services.id')
    ->get();

            $Customer = DB::table('appointments')
    ->join('users', 'appointments.user_id', '=', 'users.id')
    ->select(
        'appointments.id as appointment_id',  // Alias for the appointment's id
        'users.id as user_id',                // Alias for the user's id
        'users.*',                            // All other column from users
        'appointments.*'                      // All other columns from appointments
    )
    ->get();
 if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
  return view('backend.appointments', ['Appointments'=>$Appointments,'Customer'=>$Customer]);
}else{
return redirect('/');
}
}else{
return redirect('/');
}
    // return $Appointments;
       
    }

    public function reports()
    {
           if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
 return view('backend.reports');}else{
return view('/');
}
}else{
return redirect('/');
}
}
    
    public function AppointmentStatus(Request $request)
    { $app = Appointment::find($request->app_id);
        $app->apt_status = $request->status;
        $app->save();
        return redirect('appointments'); 
    }

    public function accounts()
    {
         if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
// Fetch all users from the database
        $users = User::all();

        // Pass the users to the Blade view
        return view('backend.accounts', compact('users'));
        // return view('backend.accounts');
}else{
return view('/');
}
}else{
return redirect('/');
}
        
    }

    public function permissions()
    {
         if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
         return view('backend.permissions');

}else{
return view('/');
}
}else{
return redirect('/');
}
    }

    public function createaccount()
    {
         if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
         return view('backend.create-account');
}else{
return redirect('/');
}
}else{
return redirect('/');
}
    }

    public function systemConfiguration()
    {
         if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
  return view('backend.system-configuration');
}else{
return view('/');
}
}else{
return redirect('/');
}
      
    }

    public function dataBackupRestore()
    {
         if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
  return view('backend.data-backup-restore');
}else{
return view('/');
}
}else{
return redirect('/');
}
      
       
    }

    public function userRegister(Request $req)
    {

        // Initialize a new User instance
        $user = new User();

        // Handle the file upload
        // Handle the file upload
        if ($req->hasFile('image')) {
            $file = $req->file('image');

            // Generate a unique file name based on the user's first and last name
            $newFileName = $req->firstname . '_' . $req->lastname . '.' . $file->getClientOriginalExtension();

            // Define the upload directory (use Laravel's storage directory)
            $uploadDirectory = 'uploads/';

            // Store the file and get its path (ensure the 'public' disk is correctly set in config/filesystems.php)
            $filePath = $file->storeAs($uploadDirectory, $newFileName, 'public');
        } else {
            $filePath = null;  // If no file is uploaded, set the path to null
        }
        // Save user data to the database
        // Save user details
        $user->profile_image = $filePath;  // This will be null if no file is uploaded
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->phone_number = $req->phoneNumber;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->role = $req->role;
        $user->designation = $req->designation;
        $user->username = $req->username;
        $user->password = bcrypt($req->password);
        $user->save();

        // Redirect to the accounts page after successful registration
        return redirect('/accounts');
    }

    // Edit Users Account
    public function edit($id)
    {
          if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
  // Fetch the user by ID
        $user = User::findOrFail($id);

        // Return the edit view with the user data
        return view('backend.crudPartials.editAccount', compact('user'));
}else{
return view('/');
}
}else{
return redirect('/');
}
       
    }

    public function update(Request $req, $id)
    {
        // Fetch the user to update
        $user = User::findOrFail($id);

        // Validate the incoming request (you can customize this validation)
        $req->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,  // Ignore unique constraint for the current user
            // Add other validation rules as needed
        ]);

        // Handle the file upload (same logic as in userRegister)
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $newFileName = $req->firstname . '_' . $req->lastname . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads/', $newFileName, 'public');
            $user->profile_image = $filePath;  // Update the profile image
        }

        // Update user details
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->phone_number = $req->phoneNumber;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->role = $req->role;
        $user->designation = $req->designation;
        $user->username = $req->username;
        if ($req->role == 'admin' || $req->role == 'customer') {
            $user->designation = null;  // Remove or set empty if role is admin or customer
        } else {
            $user->designation = $req->designation;  // Set designation as usual
        }        
        // Update password if provided
        if ($req->password) {
            $user->password = bcrypt($req->password);
        }

        // Save the updated data
        $user->save();

        // Redirect to the accounts page or wherever you want after updating
        return redirect('/accounts');
    }

    // View User Profile
    public function show($id)
    {
          if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
 // Fetch the user by ID
        $user = User::findOrFail($id);

        // Pass user data to the view
        return view('backend.crudPartials.profile', compact('user'));}
        else{
return view('/');
}
}else{
return redirect('/');
}
       
    }

    // Method to delete a user profile
    //
    public function destroy($id)
    {
        // Check if the user is trying to delete themselves
        // Find the user by ID
        $user = User::findOrFail($id);

        // Check if the user has a profile image and delete it if it exists
        if ($user->profile_image && File::exists(public_path('storage/' . $user->profile_image))) {
            File::delete(public_path('storage/' . $user->profile_image));
        }

        // Delete the user from the database
        $user->delete();

        // Redirect to the accounts page with a success message
        return redirect()->route('accounts')->with('success', 'User profile deleted successfully.');
    }


    // Inquiries CRUD

    // Add this function to handle form submissions
    public function storeContact(Request $req)
    {
       
        $inq = new Inquire();
       
        $inq->name = $req->inqName;
        $inq->email = $req->inqEmail;
        $inq->subject = $req->inqSubject;
        $inq->message = $req->inqMessage;
        $inq->save();
    
    // Redirect to the home page after saving the inquiry
    return redirect('/');
    }

      public function showInquiries()
    {
            if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
 // Fetch the user by ID
      // Fetch all inquiries from the database
        $inquiries = Inquire::all();

        // Pass the inquiries to the view
        return view('backend.crudPartials.inquiries.inquiries', compact('inquiries'));
    }
        else{
return view('/');
}
}else{
return redirect('/');
}
        
    }

    public function editInquiries($id)
    {

        $inquiry = Inquire::findOrFail($id);
        return view('backend.crudPartials.inquiries.editInquiries', compact('inquiry'));
    }

    public function updateInquiries(Request $req, $id)
    {
        $inquiry = Inquire::findOrFail($id);

        $inquiry->name = $req->inqName;
        $inquiry->email = $req->inqEmail;
        $inquiry->subject = $req->inqSubject;
        $inquiry->message = $req->inqMessage;
        $inquiry->save();

        return redirect('/inquiries');   
     }

    public function destroyInquiries($id)
    {
        $inquiry = Inquire::findOrFail($id);
        $inquiry->delete();

        return redirect('/inquiries');  
    }  
    
    public function showSingleInquiry($id)
{
        if(Auth::check()){
if(Auth::user()->role == "admin" || Auth::user()->role == "employee"){
 // Find the inquiry by its ID or fail with a 404 error
    $inquiry = Inquire::findOrFail($id);

    // Return the single inquiry details view
    return view('backend.crudPartials.inquiries.showInquiries', compact('inquiry'));}
        else{
return view('/');
}
}else{
return redirect('/');
}
   
}
}
