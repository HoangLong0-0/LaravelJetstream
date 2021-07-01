<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\InformationController;
Route::match(["get","post"],"login",[LoginController::class,"login"])->name("login");

Route::middleware("auth:admin")->group(function (){
    Route::middleware("admin")->group(function (){
        //admin_only route
            //cp
        Route::get('/campaigns',[CampaignController::class,"all"]);
        Route::get('/campaigns/new',[CampaignController::class,"form"]);
        Route::post('/campaigns/save',[CampaignController::class,"save"]);
        Route::get('/campaigns/edit/{id}',[CampaignController::class,"edit"]);
        Route::post('/campaigns/update/{id}',[CampaignController::class,"update"]);
        Route::get('/campaigns/delete/{id}',[CampaignController::class,"delete"]);
        Route::get('/about-us',[WebController::class,"aboutUs"]);

    });
    //mod route
    Route::get('/',[WebController::class,"home"]);
    //cate
    Route::get('/categories',[CategoryController::class,"all"]);
    Route::get('/categories/new',[CategoryController::class,"form"]);
    Route::post('/categories/save',[CategoryController::class,"save"]);
    Route::get('/categories/edit/{id}',[CategoryController::class,"edit"]);
    Route::post('/categories/update/{id}',[CategoryController::class,"update"]);
    Route::get('/categories/delete/{id}',[CategoryController::class,"delete"]);
    //pr
    Route::get('/products',[ProductController::class,"all"]);
    Route::get('/products/new',[ProductController::class,"form"]);
    Route::post('/products/save',[ProductController::class,"save"]);
    Route::get('/products/edit/{id}',[ProductController::class,"edit"]);
    Route::post('/products/update/{id}',[ProductController::class,"update"]);
    //in
    Route::get('/informations',[InformationController::class,"all"]);
    Route::get('/informations/new',[InformationController::class,"form"]);
    Route::post('/informations/save',[InformationController::class,"save"]);
    Route::get('/informations/edit/{id}',[InformationController::class,"edit"]);
    Route::post('/informations/update/{id}',[InformationController::class,"update"]);
    Route::get('/informations/delete/{id}',[InformationController::class,"delete"]);



});
