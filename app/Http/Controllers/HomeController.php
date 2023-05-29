<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirectDashboard()
    {
        return redirect('/dashboard', 302);
    }
    public function dashboard()
    {
        return 'this is dashboard';
    }
}
