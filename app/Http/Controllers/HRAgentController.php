<?php

namespace App\Http\Controllers;

use App\Neuron\Agent\HRAgent;
use Illuminate\Http\Request;
use NeuronAI\Chat\Messages\UserMessage;

class HRAgentController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $userMessage = new UserMessage($request->message);
        $agent = HRAgent::make($userMessage);
        $response = $agent->chat($userMessage);

        return response()->json([
            'response' => $response,
        ]);
    }
}
