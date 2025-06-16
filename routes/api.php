<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use NeuronAI\Chat\Messages\UserMessage;
use App\Http\Controllers\HRAgentController;
use App\Http\Controllers\MyAgentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('chat', HRAgentController::class);
