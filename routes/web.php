<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\View_DATABASE\MoleculesController;
use App\Http\Controllers\View_DATABASE\CompareK_O;
use App\Http\Controllers\View_DATABASE\Apps;
use App\Http\Controllers\View_DATABASE\KOverals;
use App\Http\Controllers\View_DATABASE\PK_S;
use App\Http\Controllers\DB_pk_koverall_Controller;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\ABC_DATABASE\App_Desktop_Table;
use App\Http\Controllers\ABC_DATABASE\MoleculeTable;
use App\Http\Controllers\ABC_DATABASE\SolventsTable;
use App\Http\Controllers\ABC_DATABASE\RadicalsTable;
use App\Http\Controllers\ABC_DATABASE\ReferencesTable;
use App\Http\Controllers\ABC_DATABASE\PK_sTable;
use App\Http\Controllers\ABC_DATABASE\K_overalsTable;



Route::get('/',[PrincipalController::class,'index']);
Auth::routes(['verify' => true]);
Route::get('/Kinetics', [PrincipalController::class,'BDKinetics']);
Route::get('/Apps-Desktop', [PrincipalController::class,'Apps_Desktop']);
Route::apiResource('/getMolecules',MoleculesController::class);
Route::apiResource('/getCompareK_O', CompareK_O::class);
Route::apiResource('/getApps', Apps::class);
Route::apiResource('/KOverals', KOverals::class);
Route::apiResource('/PK_S', PK_S::class);
Route::get("/Kinetics/relative-k-overall",[PrincipalController::class,'relative_k_overall']);
Route::get('/logout', [Auth\LoginController::class,'logout']);
Route::get('/home', [HomeController::class,'index'] )->name('home');
Route::get('/ModifyBD/DB-pk-Koverall',[DB_pk_koverall_Controller::class,'DB_pk_Koverall'])->name('DB_pk_Koverall');
Route::get('/ModifyBD/DB-pk-Koverall/Molecules',[DB_pk_koverall_Controller::class,'Molecules'])->name('Molecules');
Route::get('/ModifyBD/DB-pk-Koverall/Solvents',[DB_pk_koverall_Controller::class,'Solvents'])->name('Solvents');
Route::get('/ModifyBD/DB-pk-Koverall/Radicals',[DB_pk_koverall_Controller::class,'Radicals'])->name('Radicals');
Route::get('/ModifyBD/DB-pk-Koverall/References',[DB_pk_koverall_Controller::class,'References'])->name('References');
Route::get('/ModifyBD/DB-pk-Koverall/PK_s',[DB_pk_koverall_Controller::class,'PK_s'])->name('PK_s');
Route::get('/ModifyBD/DB-pk-Koverall/K_overall',[DB_pk_koverall_Controller::class,'K_overall'])->name('K_overall');
Route::get('/Up-Apps-Desktop',[AppsController::class,'indexApp'])->name('Apps Desktop');
Route::apiResource('/upAppsDesktop',App_Desktop_Table::class)->middleware(['auth','role:admin,super-admin']);
Route::apiResource('/MoleculeTable',MoleculeTable::class)->middleware(['auth','role:admin,super-admin']);
Route::apiResource('/SolventsTable',SolventsTable::class)->middleware(['auth','role:admin,super-admin']);
Route::apiResource('/RadicalsTable',RadicalsTable::class)->middleware(['auth','role:admin,super-admin']);
Route::apiResource('/ReferencesTable',ReferencesTable::class)->middleware(['auth','role:admin,super-admin']);
Route::apiResource('/PK_sTable',PK_sTable::class)->middleware(['auth','role:admin,super-admin']);
Route::apiResource('/K_overalsTable',K_overalsTable::class)->middleware(['auth','role:admin,super-admin']);

