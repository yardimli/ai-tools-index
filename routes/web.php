<?php

	use App\Http\Controllers\AiSetupController;
	use App\Http\Controllers\AiSetupImport;
	use Illuminate\Support\Facades\Route;

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
		return view('welcome');
	});

	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/import-csv', [AiSetupImport::class, 'importCsv'])->name('import-csv');
	Route::get('/import-csv-details', [AiSetupImport::class, 'importCsvDetails'])->name('import-csv-details');

	Route::get('/list-ai-tools', [AiSetupController::class, 'listAiTools'])->name('list-ai-tools');
	Route::get('/download-ai-tool/{id}', [AiSetupController::class, 'downloadAiTool'])->name('download-ai-tool');
