<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\Direction;
use App\Models\Drug;
use Illuminate\Http\Request;

class DrugsController extends Controller
{
  public function index(Request $request)
  {
    $data = Helper::getPageTexts('drugs');

    $data['banners'] = Banner::get();

    if ($request->has('category')) {
      $data['drugs'] =  Drug::select('id', 'slug', 'prescription', 'img', 'title', 'description', 'icon', 'direction_id', 'category')->where('category', $request->category)->paginate(8);
    } else {
      $data['drugs'] = Drug::select('id', 'slug', 'prescription', 'img', 'title', 'description', 'icon', 'direction_id', 'category')->paginate(8);
    }

    $data['directions'] = Direction::get();

    return view('pages.drugs', compact('data'));
  }

  public function show($slug)
  {
    $drug = Drug::where('slug', $slug)->first();

    return view('pages.drugs-show', compact('drug'));
  }
}
