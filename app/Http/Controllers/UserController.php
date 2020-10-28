<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        if (request()->user()->hasRole('user')) {
            return redirect('dashboard/user');
        } else {
            return redirect('login');
        }
    }

    public function DataUser()
    {
        $datauser = DB::table('users')->get();
      

        return view('dashboard.user.index', compact('datauser','showpassword'));
    }
}
