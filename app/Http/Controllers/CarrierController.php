<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Vacancy;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function apply(Request $request)
  {
    $request->validate([
      'vacancy' => 'required',
      'name' => 'required',
      'phone' => 'required',
      'email' => 'required',
      'cv' => 'required',
    ]);

    $slug = SlugService::createSlug(Application::class, 'slug', request('name'));

    $file = $request->file('cv');
    $fileName = $slug . '.' . $file->extension();
    $file->move(public_path('/files/applications'), $fileName);

    $application = Application::create([
      'vacancy_id' => request('vacancy'),
      'name' => request('name'),
      'slug' => $slug,
      'phone' => request('phone'),
      'email' => request('email'),
      'cv' => $fileName,
    ]);

    return $application ? 'success' : 'fail';
  }

  public function vacancies()
  {
    $vacancies = Vacancy::get();

    return json_encode($vacancies);
  }

  public function downloadVacancy(Request $request)
  {
    $vacancy = Vacancy::select('id', 'file')->find($request->id);

    if (!$vacancy->file) {
      return back();
    }

    $file = public_path('files/vacancies/' . $vacancy->file);

    $extension = pathinfo($file, PATHINFO_EXTENSION);

    $headers = array(
      'Content-Type: application/' . $extension,
    );

    return response()->download($file, $vacancy->file, $headers);
    // download vacancy description file
  }
}
