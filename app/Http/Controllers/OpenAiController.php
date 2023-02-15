<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAiController extends Controller
{
    //
    public function index(){

        return view('index');
    }

    public function runCompletion($petType, $numberOfNames, $sex){
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'generate '.$numberOfNames." ".$sex." ".$petType." pet name in comma separated format with no spacing between commas",
            'max_tokens' => 256,
            'temperature' => 1
        ]);

        return response()->json($result->choices[0]->text, 200);
    }

}

