<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextsController extends Controller
{
  public function update(Request $request)
  {
    $request->validate([
      'text-id' => 'required',
      'text' => 'required',
    ]);

    $text = Text::find(request('text-id'));
    $text->text = $request->text;
    $text->update();
  }

  public function updateMap(Request $request)
  {
    $request->validate([
      'zoom' => 'required',
      'lat' => 'required',
      'lng' => 'required',
    ]);

    $zoom = Text::where('caption', 'map-zoom-level')->first();
    $zoom->text = request('zoom');
    $zoom->update();

    $lat = Text::where('caption', 'map-lat')->first();
    $lat->text = request('lat');
    $lat->update();

    $lng = Text::where('caption', 'map-lng')->first();
    $lng->text = request('lng');
    $lng->update();
  }
}
