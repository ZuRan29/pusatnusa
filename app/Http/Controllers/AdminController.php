<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        if (request()->user()->hasRole('admin')) {
            return redirect('dashboard-admin');
        } else {
            return redirect('/login');
        }
    }
}
