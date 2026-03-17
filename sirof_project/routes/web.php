<?php

use App\Http\Controllers\EstatisticaController;
use App\Http\Controllers\FrontOffice\EnvolvidoController;
use App\Http\Controllers\FrontOffice\InfraccaoController;
use App\Http\Controllers\FrontOffice\OcorrenciaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    //return view('dashboard');
    return view('frontoffice.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/logout', [ProfileController::class, 'adminLogout'])->name('admin.logout');
});

require __DIR__.'/auth.php';


/* ---------------------------------------- */
/* ----- ROUTES FOR OCORRENCIA MANAGE ------- */
Route::middleware('auth')->group(function () {
    Route::controller(OcorrenciaController::class)->group(function(){
        
    Route::get('/all/ocorrencia', 'allOcorrencia')->name('all.ocorrencia');
        
        Route::get('/add/ocorrencia', 'addOcorrencia')->name('add.ocorrencia');
        Route::post('/store/ocorrencia', 'storeOcorrencia')->name('store.ocorrencia');
        Route::get('/details/ocorrencia/{id}', 'detailsOcorrencia')->name('details.ocorrencia');
        Route::post('/update/ocorrencia', 'updateOcorrencia')->name('update.ocorrencia');
        Route::get('/delete/ocorrencia/{id}', 'deleteOcorrencia')->name('delete.ocorrencia');
        Route::get('/get/envolvidos/{id}', 'getEnvolvidos')->name('get.envolvidos');
        Route::get('/get/resumo/{id}', 'getResumo')->name('get.resumo');
        Route::get('/submeter/ocorrencia/{id}', 'submeterOcorrencia')->name('submeter.ocorrencia');
        
    });
});


/* ---------------------------------------- */
/* ----- ROUTES FOR ENVOLVIDOS MANAGE ------- */
Route::middleware('auth')->group(function () {
    
    Route::controller(EnvolvidoController::class)->group(function(){        
        Route::get('/all/envolvidos', 'allEnvolvidos')->name('all.envolvidos');
        Route::post('/store/envolvido', 'storeEnvolvido')->name('store.envolvido');
        Route::get('/edit/envolvido/{id}', 'editEnvolvido')->name('edit.envolvido');
        Route::post('/update/envolvido', 'updateEnvolvido')->name('update.envolvido');
        Route::get('/delete/envolvido/{id}', 'deleteEnvolvido')->name('delete.envolvido');

        /*Route::get('/add/ocorrencia', 'addOcorrencia')->name('add.ocorrencia');
        Route::get('/details/ocorrencia/{id}', 'detailsOcorrencia')->name('details.ocorrencia');        
        */
    });
});


/* ---------------------------------------- */
/* ----- ROUTES FOR INFRACÇÃO MANAGE ------- */
Route::middleware('auth')->group(function () {
    
    Route::controller(InfraccaoController::class)->group(function(){        
        //Route::get('/all/infraccao', 'allInfraccoes')->name('all.envolvidos');
        Route::post('/store/infraccao', 'storeInfraccao')->name('store.infraccao');
        Route::get('/edit/infraccao/{id}', 'editInfraccao')->name('edit.infraccao');
        Route::post('/update/infraccao', 'updateInfraccao')->name('update.infraccao');
        Route::get('/delete/infraccao/{id}', 'deleteInfraccao')->name('delete.infraccao');
        
    
        /*
        Route::get('/details/ocorrencia/{id}', 'detailsOcorrencia')->name('details.ocorrencia');        
        */
    });
});


/* ---------------------------------------- */
/* ----- ROUTES FOR ESTATÍSTICA ------- */
Route::middleware('auth')->group(function () {
    
    Route::controller(EstatisticaController::class)->group(function(){        

        Route::get('/all/estatistica', 'allEstatistica')->name('all.estatistica');

    });

});