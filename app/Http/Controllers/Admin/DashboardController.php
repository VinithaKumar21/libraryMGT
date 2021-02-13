<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class DashboardController extends Controller
{
    //
    public function registeredUsers(){

    	$userDetails = User::all();
    	return view('admin.user')->with('userDetails', $userDetails);
    }
    public function addUser(){

    	return view('admin.adduser');
    }
    public function editUser($id){

    	$userDetails = User::findOrFail($id);
    	return view('admin.edituser')->with('userDetails', $userDetails);
    }
    public function updateUser(Request $request, $id)
    {
    	$userDetails = User::find($id);
    	$userDetails->name = $request->input('name');
    	$userDetails->email = $request->input('email');

    	$userDetails->update();
    	return redirect('/user')->with('status', 'User Data Updated');
    }

    public function createUser(Request $request)
    {
    	
    	$userDetails = new User;
    	$userDetails->name = $request->input('name');
    	$userDetails->email = $request->input('email');
    	$userDetails->password = $request->input('password');

    	$userDetails->save();
    	return redirect('/user')->with('status', 'Data Added Successfully');
    }
    public function deleteUser($id)
    {
    	$userDetails = User::findOrFail($id);

    	$userDetails->delete();
    	return redirect('/user')->with('status', 'User Data Deleted');
    }
}
