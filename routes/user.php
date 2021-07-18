<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\InformationController;

Route::middleware("auth:user")->group(function (){
    Route::get('/about-us',[WebController::class,"aboutUs"]);
    Route::get('/',[WebController::class,"home"]);
    Route::get('/logout',[WebController::class,"logout"]);
    //camp
    Route::get('/campaigns',[WebController::class,"list_campaign"]);
    Route::get('/campaigns/detail/{id}',[WebController::class,"campaign_detail"]);
    Route::get('/campaigns/register/{id}',[WebController::class,"campaign_register"]);
    //in
    Route::get('/informations',[WebController::class,"list_information"]);
    Route::get('/informations/detail/{id}',[WebController::class,"information_detail"]);
    //mm
    Route::get('/management',[WebController::class,"management"]);
    Route::get('/management/delete/{id}',[WebController::class,"management_delete"]);




});
