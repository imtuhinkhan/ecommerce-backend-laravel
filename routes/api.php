<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

Route::get('v1/visitor-info',[VisitorController::class,'getVisitorInformations']);