<?php

use App\Models\District;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get-districts/{id}', function ($id) {
    return response()->json(District::where('province_id', $id)->get());
});
Route::get('/get-municipalities/{id}', function ($id) {
    return response()->json(Municipality::where('district_id', $id)->get());
});
Route::post('/upload-document', function (Request $request) {
    $path = $request->file('file')->store('files');

    return $path;
});

Route::get('/test', function () {
    $responseP = Http::get('https://tms43.nepsetms.com.np/tmsapi/clientApi/nepal-location/province');
    foreach ($responseP->collect() as $province) {
        Province::updateOrCreate(['id' => $province['id']], $province);
        $responseD = Http::get('https://tms43.nepsetms.com.np/tmsapi/clientApi/nepal-location/district-by-province/'.$province['id']);
        foreach ($responseD->collect() as $district) {
            $district['province_id'] = $province['id'];
            District::updateOrCreate(['id' => $district['id']], $district);
            $responseM = Http::get('https://tms43.nepsetms.com.np/tmsapi/clientApi/nepal-location/municipality-by-district/'.$district['id']);
            foreach ($responseM->collect() as $municipality) {
                $municipality['district_id'] = $district['id'];
                Municipality::updateOrCreate(['id' => $municipality['id']], $municipality);
            }
        }
    }
});
