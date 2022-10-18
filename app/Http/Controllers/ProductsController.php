<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Direction;
use App\Models\Drug;
use Illuminate\Http\Request;
use stdClass;

class ProductsController extends Controller
{
  public function index(Request $request)
  {
    $data = new stdClass();
    $data->banners = Banner::get();

    if ($request->has('category')) {
      $data->products = Drug::where('category', $request->category)->paginate(8);
    } else {
      $data->products = Drug::paginate(8);
    }

    $data->directions = Direction::get();

    return view('pages.products.index', compact('data'));
  }

  public function show($slug)
  {
    $data = new stdClass();
    $data->product = Drug::where('slug', $slug)->first();
    $data->banners = Banner::get();
    $data->similarProducts = Drug::where('direction_id', $data->product->direction_id)
      ->take(3)->get();

    return view('pages.products.show', compact('data'));
  }

  public function filter(Request $request)
  {
    $drugs = Drug::where('title', 'like', '%' . $request->json('keyword') . '%')
      ->where('category', 'like', '%' .  $request->json('category') . '%')
      ->where('prescription', 'like', '%' .  $request->json('prescription') . '%')
      ->where('direction_id', 'like', '%' .  $request->json('direction') . '%')
      ->paginate(8);

    return json_encode(['template' => view('layouts.filter', compact('drugs'))->render()]);
  }
}
