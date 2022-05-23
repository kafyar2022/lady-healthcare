<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\Direction;
use App\Models\Drug;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    return redirect(route('home'));
  }

  public function drugs()
  {
    $data = Helper::getPageTexts('drugs');

    $data['banners'] = Banner::get();

    $data['drugs'] = Drug::select('id', 'slug', 'prescription', 'img', 'title', 'description', 'icon', 'direction_id', 'category')->latest()->paginate(8);

    $data['directions'] = Direction::get();

    return view('.dashboard.pages.drugs', compact('data'));
  }

  public function carrier()
  {
    return view('dashboard.pages.carrier');
  }

  public function banners()
  {
    return view('dashboard.pages.banners');
  }

  public function insertSocialLink(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'url' => 'required',
      'icon' => 'required',
    ]);

    $file = $request->file('icon');
    $fileName = uniqid() . '.' . $file->extension();
    $file->move(public_path('img/social-icons'), $fileName);

    SocialLink::create([
      'title' => request('title'),
      'url' => request('url'),
      'icon' => $fileName,
    ]);
  }

  public function updateSocialLink(Request $request)
  {
    $request->validate([
      'social-link-id' => 'required',
      'title' => 'required',
      'url' => 'required',
    ]);

    $socialLink = SocialLink::find(request('social-link-id'));
    $socialLink->title = $request->title;
    $socialLink->url = $request->url;

    if ($request->has('icon')) {
      $file = $request->file('icon');
      $fileName = uniqid() . '.' . $file->extension();
      $file->move(public_path('img/social-icons'), $fileName);

      $path = public_path('img/social-icons/' . $socialLink->icon);
      file_exists($path) ? unlink($path) : '';

      $socialLink->icon = $fileName;
    }

    $socialLink->update();
  }

  public function destroySocialLink(Request $request)
  {
    $socialLink = SocialLink::find($request->id);

    $path = public_path('img/social-icons/' . $socialLink->icon);
    file_exists($path) ? unlink($path) : '';

    $socialLink->delete();
  }
}
