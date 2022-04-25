<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $pageTexts = Helper::getPageTexts('home');

    return view('pages.home', compact('pageTexts'));
  }
}
