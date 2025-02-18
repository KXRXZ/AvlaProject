<?php


use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Middleware\ValidateRole;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    if(!auth()->user()){
        $settings = DB::table('settings')->where('id', 1)->first();
        return view('auth.login', compact('settings'));
    }else{
        if(auth()->user()->role == '1'){
            return redirect()->route('table.index');
        } /* else if(auth()->user()->role == '5' ){
            return redirect()->route('inventory.index');
        } */
    }
});

Route::middleware("role:1")->group(function(){

    

    // TABLE
    Route::get('/system-management/table', [TableController::class, 'index'])->name('table.index');
    Route::get('/system-management/table/add', [TableController::class, 'add'])->name('table.add');
    Route::post('/system-management/table/store', [TableController::class, 'store'])->name('table.store');
    Route::get('/system-management/table/edit/{slug}', [TableController::class, 'edit']);
    Route::post('/system-management/table/update', [TableController::class, 'update'])->name('table.update');
    Route::get('/system-management/table/delete/{slug}', [TableController::class, 'delete'])->name('table.delete');
    Route::get('/system-management/table/{page}', [TableController::class, 'paginate']);
    Route::get('/system-management/table/{page}/{search}', [TableController::class, 'search']);

    // USERS
    Route::get('/system-management/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/system-management/user/add', [UserController::class, 'add'])->name('user.add');
    Route::post('/system-management/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/system-management/user/edit/{slug}', [UserController::class, 'edit']);
    Route::post('/system-management/user/update', [UserController::class, 'update'])->name('user.update');
    Route::get('/system-management/user/delete/{slug}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/system-management/user/{page}', [UserController::class, 'paginate']);
    Route::get('/system-management/user/{page}/{search}', [UserController::class, 'search']);

    // SETTINGS
    Route::get('/system-management/settings', [SettingController::class, 'settings'])->name('settings.index');
    Route::post('/system-management/settings/store', [SettingController::class, 'store'])->name('settings.store');
    Route::get('/system-management/settings/add', [SettingController::class, 'add'])->name('settings.add');
    Route::get('/system-management/settings/edit/{slug}', [SettingController::class, 'edit']);
    Route::post('/system-management/settings/update', [SettingController::class, 'update'])->name('settings.update');
    Route::get('/system-management/settings/delete/{slug}', [SettingController::class, 'delete'])->name('settings.delete');
    Route::get('/system-management/settings/{page}', [SettingController::class, 'paginate']);
    Route::get('/system-management/settings/{page}/{search}', [SettingController::class, 'search']);

    //test
    Route::get('/system-management/test', [TableController::class, 'test'])->name('test.index');

});


Route::view('error', 'error');

require __DIR__.'/auth.php';
