<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('admin.index');

    }//end method

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }//end method

    public function AdminLogin(Request $request){

        return view('admin.admin_login');
    }//end method

    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view ('admin.admin_Profile_view',compact('profileData'));


    }//end method
  
    
    
    
    public function AdminProfileStore(Request $request){
      $id = Auth::user()->id;
      $data = User::find($id);
      $data->name = $request->input('name');
      $data->username = $request->input('username');
        
      $data->email = $request->input('email');
      $data->phone = $request->input('phone');
       
    $data->address = $request->input('address');
    
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        @unlink(public_path('upload/admin_images/'.$data->photo));
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $destinationPath = public_path('upload/admin_images'); // Specify the destination directory
        $file->move($destinationPath, $filename);
        $data->photo = $filename;
    }
       
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Succesfully',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);

    }//end method

    public function AdminChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.body.admin_change_password',compact('profileData'));
    }//end method

    public function AdminUpdatePassword(request $request){
        //validation
        $request-> validate([
            'old_password'=>'required',

            'new_password'=>'required|confirmed'
        ]);
        //match the old password

        if (!Hash::check($request->old_password, auth::user()->password)){
            $notification = array(
                'message' => 'Old password does not match!',
                'alert-type' =>'error'
            );
            return back()->with($notification);
        }
            /// update the new password
           // User::whereId(auth)->user()->update(['password'=>Hash::make($request->new_password)
           User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        
        $notification = array(
            'message' => ' password change successfully ',
            'alert-type' =>'success'
        );
        return back()->with($notification);
    }//end method
}
