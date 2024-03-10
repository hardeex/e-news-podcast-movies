<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache; // for caching the exchange rate to avoid frquent api request
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\NewsPost;
use App\Models\Category; 
use App\Models\Image;


use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{
 
    public function fetchExchangeRate()
    {
        try {
            $apiKey = config('api.exchangeratesapi.access_key');
            $response = Http::get("http://api.exchangeratesapi.io/v1/latest?access_key=$apiKey");
            $exchangeRate = $response->json();
    
            if (!isset($exchangeRate['rates']['USD'])) {
                throw new \Exception("USD exchange rate not found in API response");
            }
    
            return $exchangeRate;
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error("Error fetching exchange rate: {$e->getMessage()}");
           
            // Return an error message to the user
            return ['error' => 'Failed to fetch exchange rate. Please try again later.'];
        }
    }
    
    public function index()
    {
        $newsPosts = NewsPost::all();
        $exchangeRate = $this->fetchExchangeRate();
    
        // Check if there's an error in fetching the exchange rate
        if (isset($exchangeRate['error'])) {
            // Display an error message to the user
            return view('home', ['error' => $exchangeRate['error']]);
        }
    
        // Pass the exchange rate and news posts to the view
        return view('home', ['exchangeRate' => $exchangeRate, 'newsPosts' => $newsPosts]);
    }
    
   
     // the index or home page --- to be deleted
     public function base(){
        return view('base.base');
    }
    

    // calling the single that handle each post
    public function single(){
        return view('single');
    }



   
    
}
