<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/
$controller_path = 'App\Http\Controllers';

Route::resource('users', MasterDataController::class);

Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class, 'index'])->name('login');
    Route::post('/',[SesiController::class, 'login']);
});

Route::get('/', function (){
    return view('login');
});

Route::get('/home', function (){
    return redirect('admin');
});
Route::get('/home', function (){
    return redirect('user');
});


//login
Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class, 'index'])->middleware('userAkses:admin');
    // Route::get('/admin/admin',[AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/user',[UserController::class, 'index'])->middleware('userAkses:user');
    // Route::get('/user/user',[AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/logout',[SesiController::class, 'logout']);
});


Route::get('/createuser', function () {
    return view('admin.createuser');
});

Route::get('/profileadmin', function () {
    return view('admin.profileadmin');
});

Route::get('/profileuser', function () {
    return view('user.profileuser');
});


// Route::resource('master-data', MasterDataController::class);


Route::get('/event-log-admin',[MasterDataController::class,'index']);//ini index table event_log di admin
Route::get('/usermanagement',[MasterDataController::class,'indexusertbl']);//ini index table usermanagement di admin
Route::get('/event-log-user',[MasterDataController::class,'indec']);//ini index table event_log di user
Route::get('/dashboardadmin',[MasterDataController::class,'indexdash']);//ini untuk menampilkan statistik data di admin
Route::get('/dashboarduser',[MasterDataController::class,'indexdashu']);//ini untuk menampilkan statistik data di user
Route::get('/createuser',[MasterDataController::class,'create']);//buat akun user di admin
Route::post('/add',[MasterDataController::class,'store']);////untuk memvalidasi data user yg dibuat oleh admin

// edit usermanagement di admin
Route::get('/usermanagement/edit/{id}', [MasterDataController::class, 'edituser']);//edit usermanagement di admin
Route::get('/useredit', [MasterDataController::class,'changepassword'])->name('user.edit');
Route::put('/user/updatepassword', [MasterDataController::class, 'updatepassword'])->name('user.updatepassword');

Route::put('/usermanagement/up/{id}', [MasterDataController::class, 'updateuser']);//update usermanagement di admin
Route::delete('/usermanagement/destroy/{id}',[MasterDataController::class,'destroyuser']); //delete usermanagement di admin

Route::get('/exportdata', [MasterDataController::class, 'eventlogexport'])->name('exportdata');
Route::get('/exportdataus', [MasterDataController::class, 'eventlogexport'])->name('exportdataus');
Route::get('/exportdatauser', [MasterDataController::class, 'usermanagementexport'])->name('exportdatauser');