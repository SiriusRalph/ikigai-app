<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DialogflowService;

class ChatbotController extends Controller
{
    protected $dialogflowService;

    public function __construct(DialogflowService $dialogflowService)
    {
        $this->dialogflowService = $dialogflowService;
    }

    public function getResponse(Request $request)
    {
        $queryText = $request->input('query');
        $response = $this->dialogflowService->detectIntent(session()->getId(), $queryText);

        return response()->json(['response' => $response->getFulfillmentText()]);
    }
}
