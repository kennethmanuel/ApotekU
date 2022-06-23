<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function users()
    {
        return view('admin.users.index', [
            "users" => User::all()
        ]);
    }

    public function view($id)
    {
        return view('admin.users.edit', [
            "user" => User::find($id)
        ]);
    }

    public function update_user(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/dashboard')->with('status', 'User Data Successfuly Updated!');
    }

    public function delete_user(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard')->with('status', 'User successfuly deleted!');
    }
}
