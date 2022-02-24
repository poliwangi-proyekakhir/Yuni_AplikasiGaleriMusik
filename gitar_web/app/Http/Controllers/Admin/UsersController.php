<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        //  dd($user);
        return view('admin.users', ['user' => $users]);
    }

    public function add()
    {
        //load form view
        return view('admin.form_user');
    }

    public function insert(Request $request)
    {

        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'role_as' => 'required',
        ]);

        //get post data
        $postData = $request->all();

        if ($request->password != null) {
            $this->validate($request, [
                'password' => 'required|min:6'
            ]);

            $postData['password'] = bcrypt($request->password);
        }
        //insert post data
        User::create($postData);

        //store status message
        Session::flash('success_msg', 'User added successfully!');

        return redirect()->route('users');
    }

    public function edit($id)
    {
        //get post data by id
        $post = User::find($id);

        //load form view
        return view('admin.form_user', ['post' => $post]);
    }

    public function update($id, Request $request)
    {
        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'role_as' => 'required',
        ]);

        //get post data
        $postData = $request->all();
        $comm = User::find($id);
        $postData['password'] = $comm->password;

        if ($request->password != null) {
            $this->validate($request, [
                'password' => 'required|min:6'
            ]);

            $postData['password'] = bcrypt($request->password);
        }
            // dd($postData);

        // //update post data
        User::find($id)->update($postData);
        // //store status message
        Session::flash('success_msg', 'User updated successfully!');

        return redirect()->route('users');
    }

    public function delete($id)
    {
        //update post data
        User::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'User deleted successfully!');

        return redirect()->route('users');
    }
}
