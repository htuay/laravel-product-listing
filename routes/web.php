<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

//All Listing
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listing/create', [ListingController::class, 'create']);

//Store Listing Data
Route::post('/listing', [ListingController::class, 'store']);

//Show Edit Form
Route::get('/listing/{product}/edit', [ListingController::class, 'edit']);

//Update Listing Data
Route::put('/listing/{product}', [ListingController::class, 'update']);

//Delete Listing Data
Route::delete('/listing/{product}', [ListingController::class, 'destroy']);

//Single Listing
Route::get('/listing/{product}', [ListingController::class, 'show']);
