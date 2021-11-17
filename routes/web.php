<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class,'index']);
Route::get('login/{provider}', [LoginController::class,'redirectToProvider']);
Route::get('{provider}/callback', [LoginController::class,'handleProviderCallback']);
Route::get('/home', [LoginController::class,'userTwitterDetails']);
Route::get('/usertweets/{id}', [LoginController::class,'userTweets']);
Route::get('/following', [LoginController::class,'following']);

Route::get('/userhome',[TenantController::class, 'userhome'])->name('userhome');
Route::get('/upgradeplan',[TenantController::class, 'upgradeplan'])->name('upgradeplan');
Route::get('/userreview',[TenantController::class, 'userreview'])->name('userreview');
Route::get('/dashboard',[TenantController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard2',[TenantController::class, 'dashboard2'])->name('dashboard2');
Route::get('/connections',[TenantController::class, 'connections'])->name('connections');
Route::get('/help',[TenantController::class, 'help'])->name('help');
Route::get('/settings',[TenantController::class, 'settings'])->name('settings');
Route::get('/template',[TenantController::class, 'template'])->name('template');
Route::get('/resource',[TenantController::class, 'resource'])->name('resource');
Route::get('/resource2',[TenantController::class, 'resource2'])->name('resource2');
Route::get('/contactus',[TenantController::class, 'contactus'])->name('contactus');
Route::get('/pricing',[TenantController::class, 'pricing'])->name('pricing');
Route::get('/twitterperformance',[TenantController::class, 'twitterperformance'])->name('twitterperformance');
Route::get('/googleplaystore',[TenantController::class, 'googleplaystore'])->name('googleplaystore');
Route::get('/instagraminsight',[TenantController::class, 'instagraminsight'])->name('instagraminsight');

Route::post('/updateprofile', [UserProfileController::class, 'updateUserProfile']);
Route::post('/createnewticket', [UserProfileController::class, 'createNewTicket']);