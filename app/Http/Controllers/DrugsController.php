<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\Direction;
use App\Models\Drug;
use Cviebrock\EloquentSluggable\Services\SlugService;
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

  public function editDrug(Request $request)
  {
    $drug = Drug::find($request->id);
    $directions = Direction::get();

    $response = [
      'drug' => $drug,
      'template' => view('dashboard.layouts.drug-edit-form', compact('drug', 'directions'))->render()
    ];

    return json_encode($response);
  }

  public function storeDrug(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'category' => 'required',
      'prescription' => 'required',
      'direction_id' => 'required',
    ]);

    $slug = SlugService::createSlug(Drug::class, 'slug', $request->title);

    $drug = new Drug();
    $drug->slug = $slug;
    $drug->title = $request->title;
    $drug->category = $request->category;
    $drug->prescription = $request->prescription;
    $drug->direction_id = $request->direction_id;

    $request->min_composition ? $drug->min_composition = $request->min_composition : '';
    $request->max_composition ? $drug->max_composition = $request->max_composition : '';

    if ($request->has('img')) {
      $file = $request->file('img');
      $fileName = $slug . '.' . $file->extension();
      $file->move(public_path('files/drugs/img'), $fileName);
      $drug->img = $fileName;
    }

    $request->description ? $drug->description = $request->description : '';
    $request->compound ? $drug->compound = $request->compound : '';
    $request->indications ? $drug->indications = $request->indications : '';
    $request->mode ? $drug->mode = $request->mode : '';

    if ($request->has('instruction')) {
      $file = $request->file('instruction');
      $fileName = $slug . '.' . $file->extension();
      $file->move(public_path('files/drugs/instructions'), $fileName);
      $drug->instruction = $fileName;
    }

    $request->url ? $drug->url = $request->url : '';

    $drug->save();
  }

  public function updateDrug(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'category' => 'required',
      'prescription' => 'required',
      'direction_id' => 'required',
    ]);

    $drug = Drug::find(request('drug-id'));

    if ($request->has('img')) {
      $path = public_path('files/drugs/img/' . $drug->img);
      file_exists($path) && $drug->img ? unlink($path) : '';

      $file = $request->file('img');
      $fileName = $drug->slug . '.' . $file->extension();
      $file->move(public_path('files/drugs/img'), $fileName);
      $drug->img = $fileName;
    }

    if ($request->has('instruction')) {
      $path = public_path('files/drugs/instructions/' . $drug->instruction);
      file_exists($path) && $drug->instruction ? unlink($path) : '';

      $file = $request->file('instruction');
      $fileName = $drug->slug . '.' . $file->extension();
      $file->move(public_path('files/drugs/instructions'), $fileName);
      $drug->instruction = $fileName;
    }

    $drug->title = $request->title;
    $drug->category = $request->category;
    $drug->prescription = $request->prescription;
    $drug->direction_id = $request->direction_id;
    $drug->min_composition = $request->min_composition;
    $drug->max_composition = $request->max_composition;
    $drug->description = $request->description;
    $drug->compound = $request->compound;
    $drug->indications = $request->indications;
    $drug->mode = $request->mode;
    $request->url ? $drug->url = $request->url : $drug->url = '#';

    $drug->update();
  }

  public function destroyDrug(Request $request)
  {
    $drug = Drug::find($request->id);

    $path = public_path('files/drugs/img/' . $drug->img);
    file_exists($path) && $drug->img ? unlink($path) : '';

    $path = public_path('files/drugs/instructions/' . $drug->instruction);
    file_exists($path) && $drug->instruction ? unlink($path) : '';

    $drug->delete();
  }

  public function createDrug()
  {
    $directions = Direction::get();

    $response = ['template' => view('dashboard.layouts.drug-insert-form', compact('directions'))->render()];

    return json_encode($response);
  }
}
