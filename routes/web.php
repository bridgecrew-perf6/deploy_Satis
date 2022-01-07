<?php

use App\Http\Controllers\AvisosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PlanTrabajoController;
use App\Http\Controllers\NotificacionController;



use App\Http\Controllers\FullCalenderController;
use App\Models\Aviso;

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

Route::get('/docente/inicioD',[MainController::class, 'docentito'])->name('docente.inicioD');

Route::get('/estudiante/inicioE',[MainController::class, 'estudiante'])->name('estudiante.inicioE');

Route::get('/admin/inicioA',[MainController::class, 'administrador'])->name('admin.inicioA');

Route::get('/layouts/plantillaEstudiante',[MainController::class, 'plantillaEstudiante'])->name('plantilla.estudiante');

Route::get('/estudiante/documentosEst/id',[MainController::class, 'documentosBaseView'])->name('estudiante.documentosBaseView');



Route::get('/estudiante/verDocumento',[AvisosController::class, 'verDocumento'])->name('estudiante.verDocumento');
Route::get('/estudiante/empresa',[MainController::class, 'empresa'])->name('estudiante.empresa');
Route::get('/estudiante/sinempresa',[MainController::class, 'sinempresa'])->name('estudiante.sinempresa');
//Route::get('/docente/calendario',[MainController::class, 'calendario'])->name('docente.calendario');
//Route::post('/docente/calendario/accion',[MainController::class, 'accion'])->name('calendario.accion');
Route::get('/docente/calendario', [FullCalenderController::class, 'index'])->name('docente.calendario');
Route::post('/docente/calendario/action', [FullCalenderController::class, 'action']);

Route::get('/notificaciones', [NotificacionController::class, 'mensajito'])->name('docente.notificaciones');

Route::get('/docente/planP',[MainController::class, 'planP'])->name('docente.planP');
Route::get('/docente/planT',[MainController::class, 'planT'])->name('docente.planT');


Route::delete('/docente/inicioD/avisosD/{aviso}',[AvisosController::class, 'destroy'])->name('avisos.destroy');
Route::delete('/docente/inicioD/convocatoriasD/{convocatoria}',[AvisosController::class, 'destroy2'])->name('convocatorias.destroy');
Route::delete('/docente/documentosB/{documentos}',[AvisosController::class, 'destroy3'])->name('documento.destroy');


Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/lista',[MainController::class, 'funda2'])->name('lista');
Route::get('/estudiante/lista',[MainController::class, 'funda3'])->name('estudiante.lista');
Route::get('/docente/lista',[MainController::class, 'funda4'])->name('docente.lista');
Route::get('/admin/lista',[MainController::class, 'funda5'])->name('admin.lista');
Route::get('/admin/docentes',[MainController::class, 'docentes'])->name('admin.docentes');

Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
Route::post('/estudiante/parteA',[MainController::class, 'displayA'])->name('estudiante.parteA');
Route::post('/estudiante/parteB',[MainController::class, 'displayB'])->name('estudiante.parteB');
Route::post('/estudiante/trabajo',[MainController::class, 'displayT'])->name('estudiante.trabajo');
Route::post('/estudiante/pagos',[MainController::class, 'displayP'])->name('estudiante.pagos');

Route::post('/docente/orden',[MainController::class, 'orden'])->name('docente.orden');
Route::post('/estudiante/orden',[MainController::class, 'displayO2'])->name('estudiante.orden');

Route::get('/docente/orden',[MainController::class, 'orden']);
Route::post('/docente/ordenG',[MainController::class, 'ordenG'])->name('docente.ordenG');
Route::post('/estudiante/cambios',[MainController::class, 'displayO'])->name('estudiante.cambios');


Route::group(['middleware'=>['AuthCheck']], function(){
    //Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register2',[MainController::class, 'register2'])->name('auth.register2');
    Route::post('/auth/save2',[MainController::class, 'save2'])->name('auth.save2');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
    Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');

    Route::get('/docente/convocatoriasD',[AvisosController::class, 'convocatoriasD'])->name('docente.convocatoriasD');
    Route::post ('/docente/convocatoria',[AvisosController::class, 'subirPdf'])->name('docente.subirPdf');
    Route::post('/docente/convocatoriaPdf',[AvisosController::class, 'displayConv'])->name('docente.convocatoriaPdf');

    Route::get('/docente/documentosB',[AvisosController::class, 'documentosB'])->name('docente.documentosB');
    Route::post('/docente/subirDocuB',[AvisosController::class,'subirDocuB'])->name('docente.subirDocuB');
    Route::post('/estudiante/documentosPdf',[AvisosController::class, 'documentosDisplay'])->name('docente.documentosDisplay');


    Route::post('/docente/avisosD',[MainController::class, 'avisosDos'])->name('docente.avisosDos');
    Route::get('/docente/avisosD',[AvisosController::class, 'avisosD'])->name('docente.avisosD');
    Route::post('/docente/contrato',[MainController::class, 'mostrarPDF'])->name('docente.contrato');
    Route::post('/docente/contratoD',[MainController::class, 'contratoD'])->name('docente.contratoD');
    Route::post('/estudiante/contrato',[MainController::class, 'mostrarPDF2'])->name('descarga.contrato');
    Route::post('/estudiante/contratoD',[MainController::class, 'contratoD2'])->name('estudiante.contratoD');
    Route::post('/docente/verC',[MainController::class, 'displayC'])->name('ver.contrato');
    Route::post('/estudiante/verC',[MainController::class, 'displayC2'])->name('ver.contrato2');

    Route::post('/estudiante/empresa',[MainController::class, 'updateE'])->name('empresa.update');
    Route::post('/estudiante/empresa2',[MainController::class, 'parteA'])->name('empresa.parteA');
    Route::post('/estudiante/empresa3',[MainController::class, 'parteB'])->name('empresa.parteB');
    Route::post('/estudiante/empresa4',[MainController::class, 'parteT'])->name('empresa.trabajo');
    Route::post('/estudiante/empresa5',[MainController::class, 'parteP'])->name('empresa.pagos');

   
    Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
    Route::get('/fundaempresa',[MainController::class, 'funda'])->name('fundaempresa');
    Route::post('/fundaempresa',[MainController::class, 'save3'])->name('auth.save3');

    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    Route::get('/docente/dashboard',[MainController::class, 'dashboard2']);
    Route::get('/estudiante/dashboard',[MainController::class, 'dashboard3']);

    Route::get('/admin/settings',[MainController::class,'settings']);
    Route::get('/admin/profile',[MainController::class,'profile']);
    Route::get('/admin/staff',[MainController::class,'staff']);


    Route::resource('pagos', PagoController::class);
    Route::resource('planTrabajos', PlanTrabajoController::class);
    Route::resource('notificaciones', NotificacionController::class);
    Route::get('/docente/documentosB/{documentos}',[AvisosController::class, 'editDocumentos'])->name('documentos.edit');
    Route::put('/docente/documentosB/{documentos}',[AvisosController::class, 'updateDocumentos'])->name('documentos.update');
    
});
