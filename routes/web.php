<?php

use App\Http\Controllers\AvisosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/',[MainController::class, 'index'])->name('home');

Route::get('/docente/inicioD',[MainController::class, 'docentito'])->name('docente.inicioD');;
Route::get('/estudiante/inicioE',[MainController::class, 'estudiante'])->name('estudiante.inicioE');;
Route::get('/admin/inicioA',[MainController::class, 'administrador'])->name('admin.inicioA');;


Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/lista',[MainController::class, 'funda2'])->name('lista');
Route::get('/estudiante/lista',[MainController::class, 'funda3']);
Route::get('/docente/lista',[MainController::class, 'funda4']);
Route::get('/admin/lista',[MainController::class, 'funda5']);



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register2',[MainController::class, 'register2'])->name('auth.register2');
    Route::post('/auth/save2',[MainController::class, 'save2'])->name('auth.save2');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
    Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
   
    Route::get('/docente/convocatoriasD',[AvisosController::class, 'convocatoriasD'])->name('docente.convocatoriasD');
    Route::post ('',[MainController::class, 'convocatoriasDos'])->name('docente.convocatoriasDos');


    Route::post('/docente/avisosD',[MainController::class, 'avisosDos'])->name('docente.avisosDos');
    Route::get('/docente/avisosD',[AvisosController::class, 'avisosD'])->name('docente.avisosD');


    Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
    Route::get('/fundaempresa',[MainController::class, 'funda'])->name('fundaempresa');
    Route::post('/fundaempresa',[MainController::class, 'save3'])->name('auth.save3');

    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    Route::get('/docente/dashboard',[MainController::class, 'dashboard2']);
    Route::get('/estudiante/dashboard',[MainController::class, 'dashboard3']);
    
    Route::get('/admin/settings',[MainController::class,'settings']);
    Route::get('/admin/profile',[MainController::class,'profile']);
    Route::get('/admin/staff',[MainController::class,'staff']);
});
