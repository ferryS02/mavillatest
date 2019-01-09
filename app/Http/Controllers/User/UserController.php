<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('users.profile')
          ->with('user',$user);
    }

    public function password()
    {
        $user = Auth::user();
        return view('users.password')
          ->with('user',$user);
    }

    public function fillInformation($newUser){
      return view('auth.fillInformation')
        ->with('newUser',$newUser);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        $name = $request->name;
        $address = $request->address;
        $telephone = $request->telephone;
        $user = User::where('id',$id)->first();

        if($request->old_password)
        {
          if (!Hash::check($request->old_password, $member->password)) {
              return response()->json(['old_password' => 'Old password inccorect'], 404);
          }

          $this->validate($request, [
            'password' => 'required|min:6|confirmed',
          ]);

          $member->password = bcrypt($request->password);
        }

        $user->name = $name;
        $user->address = $address;
        $user->telephone = $telephone;
        $user->save();
        $success = "Update Member Successfully";
        // Session::put('success', $success );
        return redirect()->action('HomeController@index')->withSuccess($success);
    }
}
