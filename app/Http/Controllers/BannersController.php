<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannersController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'img' => 'required',
      'title' => 'required',
    ]);

    $banner = new Banner();

    $file = $request->file('img');
    $fileName = uniqid() . '.' . $file->extension();
    $file->move(public_path('files/banners'), $fileName);

    $banner->img = $fileName;
    $banner->title = $request->title;
    $request->link ? $banner->link = $request->link : '';
    $request->url ? $banner->url = $request->url : '';
    $request->text ? $banner->text = $request->text : '';
    $banner->save();
  }

  public function destroy(Request $request)
  {
    $banner = Banner::find($request->id);

    $path = public_path('files/banners/' . $banner->img);
    if (file_exists($path)) {
      unlink($path);
    }

    $banner->delete();
  }

  public function update(Request $request)
  {
    $request->validate(['title' => 'required']);

    $banner = Banner::find($request->banner_id);

    if ($request->has('img')) {
      $path = public_path('files/banners/' . $banner->img);
      file_exists($path) ? unlink($path) : '';

      $file = $request->file('img');
      $fileName = uniqid() . '.' . $file->extension();
      $file->move(public_path('files/banners'), $fileName);

      $banner->img = $fileName;
    }

    $request->title ? $banner->title = $request->title : '';
    $request->link ? $banner->link = $request->link : '';
    $request->url ? $banner->url = $request->url : '';
    $request->text ? $banner->text = $request->text : '';
    $banner->update();
  }
}
