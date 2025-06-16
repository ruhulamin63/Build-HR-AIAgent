<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use NeuronAI\Chat\Messages\UserMessage;
use App\Http\Controllers\MyAgentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('chat', function (Request $request) {
    $response = MyAgentController::make()
        ->chat(
            new UserMessage($request->input('message'))
        );

    echo $response->getContent();
});

Route::get('debug-agent', function() {
    return get_class_methods(new \NeuronAI\Agent());
});

