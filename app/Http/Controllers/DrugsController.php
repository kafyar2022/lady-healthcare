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
    $data = Helper::getPageTexts('drugs-show');
    $data['banners'] = Banner::get();
    $drug = Drug::where('slug', $slug)->first();
    $data['similar-drugs'] = Drug::where('direction_id', $drug->direction_id)->take(3)->get();

    return view('pages.drugs-show', compact('data', 'drug'));
  }

  public function filterDrugs(Request $request)
  {
    $drugs = Drug::where('title', 'like', '%' . $request->json('keyword') . '%')
      ->where('category', 'like', '%' .  $request->json('category') . '%')
      ->where('prescription', 'like', '%' .  $request->json('prescription') . '%')
      ->where('direction_id', 'like', '%' .  $request->json('direction') . '%')
      ->paginate(8);

    return json_encode(['template' => view('layouts.filter', compact('drugs'))->render()]);
  }

  public function downloadInstruction($id)
  {
    $drug = Drug::select('id', 'instruction')->find($id);

    if (!$drug->instruction) {
      return back();
    }

    $file = public_path('files/drugs/instructions/' . $drug->instruction);

    $extension = pathinfo($file, PATHINFO_EXTENSION);

    $headers = array(
      'Content-Type: application/' . $extension,
    );

    return response()->download($file, $drug->instruction, $headers);
  }
}
