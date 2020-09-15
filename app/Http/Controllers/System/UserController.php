<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Log;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;

class UserController extends Controller
{
    public function getListUser(Request $req) {
        $user = User::orderBy('id', 'desc');
        if($req->id_search){
            $user->where('id', $req->id_search);
        }
        if($req->name_search){
            $user->where('name', 'like', '%'.$req->name_search.'%');
        }
        if($req->email_search){
            $user->where('email', 'like', '%'.$req->email_search.'%');
        }
        $user = $user->paginate(20);
        return view('System.User.ListUser', compact('user'));
    }

    public function postAddUser(Request $request) {
        $this->validate(
            $request,
            [
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:3|max:32',
                'passwordAgain' => 'required|same:password'
            ]
        );
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
        if($user){
            $user_main = Auth::user();
            $action = 2;
            $comment = 'Add User ID: '.$user->id.' By ID: '.$user_main->id;
            Log::insertLog($user_main->id, $action, $comment);
        }
        return redirect()->route('system.user.getListUser')->with(['flash_level' => 'success', 'flash_message' => 'Add user sucessfully!']);
    }

    public function postAjax(Request $req) {
        $id = $req->id;
        $user = User::find($id);
        echo $user;
    }

    public function postAjaxEdit(Request $req){
        $id = $req->id;
        $name = $req->name;
        $level = $req->level;
        if ($req->password != "") {
            $password = bcrypt($req->password);
            User::where('id', $id)->update(['name' => $name, 'level' => $level, 'password' =>$password]);
        }
        $update_user = User::where('id', $id)->update(['name' => $name, 'level' => $level]);
        if($update_user){
            $user = Auth::user();
            $action = 8;
            $comment = 'Update ID: '.$id.' by ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }

    public function getDeleteUser(Request $req){
        $id = $req->id;
        $user_del = User::find($id);
        $user = Auth::user();
        $delete_user = User::where('id', $id)->delete();
        $action = 7;
        $comment = 'Delete user: '.$user_del->email.' By ID: '.$user->id;
        Log::insertLog($user->id, $action, $comment);
        if($delete_user){
            echo true;
        }else{
            echo false;
        }
    }

    public function postChangePassword(Request $req)
    {
        $this->validate($req, [
            'current-password' => 'required',
            'new-password' => 'required|min:6',
            're-password' => 'required|same:new-password',
        ]);

        $user = Auth::user();
        $dbPassword = DB::table('users')->where('id', $user->id)->value('password');

        if (Hash::check($req->input('current-password'), $dbPassword)) {

            $updatePassword = DB::table('users')->where('id', $user->id)->update([
                'password' => bcrypt($req->input('new-password'))
            ]);
            if($updatePassword){
                $action = 18;
                $comment = 'Change Password ID: '.$user->id;
                Log::insertLog($user->id, $action, $comment);
            }
            return redirect()->back()->with(['flash_level' => 'success', 'flash_message' => 'Password changed successful']);
        }
        return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Current password incorrect']);
    }
}
