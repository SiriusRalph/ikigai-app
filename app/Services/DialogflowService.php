<?php

namespace App\Services;
use Illuminate\Support\Facades\Log;
use Google\Cloud\Dialogflow\V2\SessionsClient;

class DialogflowService
{
    protected $projectId;
    protected $credentialsPath;

    public function __construct()
    {
        $this->projectId = env('DIALOGFLOW_PROJECT_ID');
        $this->credentialsPath = env('DIALOGFLOW_CREDENTIALS');

        Log::info("Project ID: {$this->projectId}, Credentials Path: {$this->credentialsPath}");

    }

    public function detectIntent($sessionId, $text)
    {
        $languageCode = 'en-US'; // Modify according to your language

        // Set credentials
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $this->credentialsPath);

        // Create SessionsClient
        $sessionsClient = new SessionsClient();

        // Create session name
        $session = $sessionsClient->sessionName($this->projectId, $sessionId ?: uniqid());

        // Create text input
        $textInput = (new \Google\Cloud\Dialogflow\V2\TextInput())
            ->setText($text)
            ->setLanguageCode($languageCode);

        // Create query input
        $queryInput = (new \Google\Cloud\Dialogflow\V2\QueryInput())
            ->setText($textInput);

        // Send request and receive response
        $response = $sessionsClient->detectIntent($session, $queryInput);

        // Get query result
        $queryResult = $response->getQueryResult();

        // Close session
        $sessionsClient->close();

        return $queryResult;
    }
}
