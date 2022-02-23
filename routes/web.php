<?php

use Illuminate\Support\Facades\Route;
use App\Mail\prosesEmail;
use App\Models\Payment;
use App\Models\Tbl_crupp;
use App\Http\Controllers\TblcruppControllers;
use App\Http\Controllers\TbldprtmnControllers;
use App\Http\Controllers\TblkategoriControllers;
use App\Http\Controllers\TblkodesedurControllers;
use App\Http\Controllers\TblprosedurControllers;
use App\Http\Controllers\TbluppprocsControllers;
use App\Http\Controllers\TblapprovalControllers;
use App\Http\Controllers\TblapprovedControllers;
use App\Http\Controllers\TblcheckControllers;
use App\Http\Controllers\TblclosedControllers;
use App\Http\Controllers\TblformprocsControllers;
use App\Http\Controllers\TblformsosiControllers;
use App\Http\Controllers\TblhouseControllers;
use App\Http\Controllers\TblupprejectControllers;
use App\Mail\sosilisasi;
use App\Models\Sosial;

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
Route::get('tblformprocs', function () {
    return view('tblformprocs.create');
});
Route::get('tblformsosi', function () {
    return view('tblformsosi.create');
});

Route::resource('tblcrupp',TblcruppControllers::class);
Route::resource('tbldprtmn',TbldprtmnControllers::class)->middleware('auth');;
Route::resource('tblkategori',TblkategoriControllers::class)->middleware('auth');;
Route::resource('tblkodesedur',TblkodesedurControllers::class)->middleware('auth');;
Route::resource('tblprosedur',TblprosedurControllers::class);
Route::resource('tbluppprocs',TbluppprocsControllers::class)->middleware('auth');;
Route::resource('tblapproval',TblapprovalControllers::class)->middleware('auth');
Route::resource('tblapproved',TblapprovedControllers::class)->middleware('auth');;
Route::resource('tblcheck',TblcheckControllers::class)->middleware('auth');;
Route::resource('tblclosed',TblclosedControllers::class)->middleware('auth');;
Route::resource('tblformprocs', TblformprocsControllers::class)->middleware('auth');;
Route::resource('tblformsosi', TblformsosiControllers::class)->middleware('auth');;
Route::resource('tblhouse', TblhouseControllers::class);
Route::resource('uppreject', TblupprejectControllers::class);
Route::post('/tblapproval/approvedCrupp', 'App\Http\Controllers\TblapprovalControllers@approvedCrupp')->name('validateCrupp');
Route::post('/tblpproval/disapprovedCrupp', 'App\Http\Controllers\TblapprovalControllers@disapprovedCrupp')->name('dissapprovedCrupp');
Route::post('/tblpproval/sosialisasiCrupp', 'App\Http\Controllers\TblapprovalControllers@sosialisasiCrupp')->name('sosialisasiCrupp');
Route::get('/tblcrupp/download/{fileini}', 'App\Http\Controllers\TblcruppControllers@downloadFile')->name('downloadfile');


Route::post('/', function () {

    $payment = new Payment();
    $tblcrupp = new Tbl_crupp();
    $tblcrupp->no_upp        = request()->no_upp;


    $path = request()->file('photo')->store('DATAUPPPROCES');
    $payment->photo = $path;

    $payment->save();

    \Mail::to('bionicbii@gmail.com') ->cc('ramaramdhani@smkwikrama.sch.id')->send(new prosesEmail($payment,$tblcrupp));


    return back();
});
Route::post('/sosi', function () {

    $sosiali = new Sosial();
    $tblcrupp = new Tbl_crupp();
    $tblcrupp->no_upp        = request()->no_upp;


    $path = request()->file('myfile')->store('DATASOSIALISASI');
    $sosiali->myfile = $path;

    $sosiali->save();

    \Mail::to('bionicbii@gmail.com') ->cc('ramaramdhani@smkwikrama.sch.id')->send(new sosilisasi($sosiali,$tblcrupp));


    return back();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();


