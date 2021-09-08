<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CateNewsController;
use App\Http\Controllers\Backend\HistoryController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\StructureController;
use App\Models\CategoryNew;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


//all Home Page
Route::get('/historypage',[HomeController::class,'History']);
Route::get('/structurepage',[HomeController::class,'Structure']);
Route::get('/rolepage',[HomeController::class,'Role']);
Route::get('/whiteReportpage',[HomeController::class,'WhiteReport']);
Route::get('/Strategypage',[HomeController::class,'Strategy']);
Route::get('/FuelPricepage',[HomeController::class,'FuelPrice']);
Route::get('/Newspage',[HomeController::class,'News']);
Route::get('/activitypage',[HomeController::class,'Activity']);
Route::get('/Statisticpage',[HomeController::class,'Statistic']);
Route::get('/Legislationpage',[HomeController::class,'Legislation']);
Route::get('/Orderpage',[HomeController::class,'Order']);
Route::get('/Noticepage',[HomeController::class,'Notice']);
Route::get('/contactpage',[HomeController::class,'Contact']);
Route::get('/NewsDetail/{id}',[HomeController::class,'NewsDetail']);


//Fetch Data to Home Page
Route::get('/', function () {
    $news = DB::table('news')->get();
    $history = DB::table('histories')->get();
    $roles = DB::table('roles')->get();
    $structures = DB::table('structures')->get();
    $cates = DB::table('category_news')->get();
    //count
    $cates_count = DB::table('category_news')->count();
    return view('main.home',compact('news','history','roles','structures','cates','cates_count'));
})->name('homeIndex');

//login Middleware to Login
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


//admin logout
Route::get('admin/logout',[AdminController::class,'Logout'])->name('admin.logout');
//admin Managment Route CRUD
Route::resource('history',HistoryController::class);
Route::resource('structure',StructureController::class);
Route::resource('role',RoleController::class);
Route::resource('cateNews',CateNewsController::class);
Route::resource('news', NewsController::class);
