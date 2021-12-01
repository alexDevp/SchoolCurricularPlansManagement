<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\EscolasController;
use App\Http\Controllers\RegimesController;
use App\Http\Controllers\UCsController;
use App\Http\Controllers\PlanosCurricularesController;
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


//Login
Route::get('/', function () {
    return view('login');
});

Route::post("/login",[UsersController::class,'login']);

//Logout
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

//Gerir Base de dados
Route::get('/gerirBaseDeDados/',[UsersController::class, 'gerir']);

//Planos Curriculares//---------------------------------------------------------------------------------
//Pag Principal
Route::get('/planosCurriculares/',[PlanosCurricularesController::class, 'index']);

//Ver
Route::get('/planosCurriculares/detail/{id}',[PlanosCurricularesController::class, 'detail']);

//Criar Novo
Route::get('/planosCurriculares/create',[PlanosCurricularesController::class, 'create']);
Route::post('/planosCurriculares/store', [PlanosCurricularesController::class, 'store']);

//Editar Curso
Route::get('/planosCurriculares/edit/{id}',[PlanosCurricularesController::class, 'edit']);
Route::post('/planosCurriculares/update/{id}',[PlanosCurricularesController::class, 'update']);

//Apagar Plano Curricular
Route::get('/planosCurriculares/destroy/{id}',[PlanosCurricularesController::class, 'destroy']);
Route::get('/planosCurriculares/deleteReg/{id}',[PlanosCurricularesController::class, 'deleteReg']);
//---------------------------------------------------------------------------------

//Routes Cursos//---------------------------------------------------------------------------------
//Pag Principal
Route::get('/cursos/',[CursosController::class, 'index']);

//Ver
Route::get('/cursos/detail/{id}',[CursosController::class, 'detail']);

//Criar Novo
Route::get('/cursos/create',[CursosController::class, 'create']);
Route::post('/cursos/store', [CursosController::class, 'store']);

//Editar Curso
Route::get('/cursos/edit/{id}',[CursosController::class, 'edit']);
Route::post('/cursos/update/{id}',[CursosController::class, 'update']);

//Apagar curso
Route::get('/cursos/destroy/{id}',[CursosController::class, 'destroy']);
Route::get('/cursos/deleteReg/{id}',[CursosController::class, 'deleteReg']);
//---------------------------------------------------------------------------------



//Routes Escolas//---------------------------------------------------------------------------------
//Pag Principal
Route::get('/escolas/',[EscolasController::class, 'index']);

//Ver
Route::get('/escolas/detail/{id}',[EscolasController::class, 'detail']);

//Criar Nova
Route::get('/escolas/create',[EscolasController::class, 'create']);
Route::post('/escolas/store', [EscolasController::class, 'store']);

//Editar Escola
Route::get('/escolas/edit/{id}',[EscolasController::class, 'edit']);
Route::post('/escolas/update/{id}',[EscolasController::class, 'update']);

//Apagar Escola
Route::get('/escolas/destroy/{id}',[EscolasController::class, 'destroy']);
Route::get('/escolas/deleteReg/{id}',[EscolasController::class, 'deleteReg']);
//---------------------------------------------------------------------------------

//Routes Regimes//---------------------------------------------------------------------------------
//Pag Principal
Route::get('/regimes/',[RegimesController::class, 'index']);

//Criar Novo
Route::get('/regimes/create',[RegimesController::class, 'create']);
Route::post('/regimes/store', [RegimesController::class, 'store']);

//Ver
Route::get('/regimes/detail/{id}',[RegimesController::class, 'detail']);

//Editar Regime
Route::get('/regimes/edit/{id}',[RegimesController::class, 'edit']);
Route::post('/regimes/update/{id}',[RegimesController::class, 'update']);

//Apagar Regime
Route::get('/regimes/destroy/{id}',[RegimesController::class, 'destroy']);
Route::get('/regimes/deleteReg/{id}',[RegimesController::class, 'deleteReg']);
//---------------------------------------------------------------------------------

//Routes Ucs//---------------------------------------------------------------------------------
//Pag Principal
Route::get('/ucs/',[UcsController::class, 'index']);

//Ver
Route::get('/ucs/detail/{id}',[UcsController::class, 'detail']);

//Criar Nova
Route::get('/ucs/create',[UcsController::class, 'create']);
Route::post('/ucs/store', [UcsController::class, 'store']);//->middleware('chk.fields');


//Editar Uc
Route::get('/ucs/edit/{id}',[UcsController::class, 'edit']);
Route::post('/ucs/update/{id}',[UcsController::class, 'update']);

//Apagar Uc
Route::get('/ucs/destroy/{id}',[UcsController::class, 'destroy']);
Route::get('/ucs/deleteReg/{id}',[UcsController::class, 'deleteReg']);
//---------------------------------------------------------------------------------
