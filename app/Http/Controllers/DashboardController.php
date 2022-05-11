<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    return redirect(route('home'));
  }

  public function drugs()
  {
    return view('dashboard.pages.drugs');
  }

  public function carrier()
  {
    return view('dashboard.pages.carrier');
  }

  public function banners()
  {
    return view('dashboard.pages.banners');
  }
}
