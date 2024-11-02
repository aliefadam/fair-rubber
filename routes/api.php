<?php

use App\Http\Controllers\CollectorController;
use App\Http\Controllers\RubberCollectedController;
use Illuminate\Support\Facades\Route;

Route::get("/getCollectorByID/{id}", [CollectorController::class, "getCollectorByID"]);
Route::post("/storeRubberCollected", [RubberCollectedController::class, "store"]);
Route::put("/editRubberCollected/{id}", [RubberCollectedController::class, "edit"]);
Route::get("/getRubberCollected/{id}", [RubberCollectedController::class, "getRubberCollectedById"]);
