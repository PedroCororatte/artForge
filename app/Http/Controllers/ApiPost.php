<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiPost extends Controller
{
   public function index(Request $request){
    $prompt = $request->input('prompt');
    return view('artforge',compact('prompt'));
   }
   public function PostToReplicateApi(Request $request){
    $url = "https://api.replicate.com/v1/predictions";
    $token = env('REPLICATE_API_TOKEN'); 
    $prompt = $request->input('prompt');

    $data = [
        'version' => '2b017d9b67edd2ee1401238df49d75da53c523f36e363881e057f5dc3ed3c5b2',
        'input' => [
            'prompt' => $prompt
        ]
    ];

    try {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Token '.$token,
        ])->post($url, $data);
            
            $id = $response['id'];
            $status = $response['status'];
            $data = ['id' => $id,'status' => $status];
            
            return view('artforge',compact('id','status','prompt'));
            
    } catch (\Exception $e) {
        return response()->json(['error' => 'Catch'], 500);
    }
   }
}
