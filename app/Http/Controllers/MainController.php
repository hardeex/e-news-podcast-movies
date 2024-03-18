<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache; 
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\NewsPost;
use App\Models\Category; 
use App\Models\Image;
use App\Models\AdAndVideo;
use Illuminate\Support\Facades\Storage;
use App\Models\ShortVideo;


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

            return ['exchangeRate' => $exchangeRate, 'error' => null];
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error("Error fetching exchange rate: {$e->getMessage()}");

            // Return an error flag
            return ['exchangeRate' => null, 'error' => 'Failed to fetch exchange rate. Please try again later.'];
        }
    }

    public function index()
    {
        // Fetch the news
        $newsPosts = NewsPost::all(); 
        $liveDesc = AdAndVideo::all();
        $shortVideos = ShortVideo::all();

        // Fetch the exchange rate
        $exchangeRateData = $this->fetchExchangeRate();

        // Check for error
        //if ($exchangeRateData['error']) {
            // Display an error message to the user
          //  return view('home', ['error' => $exchangeRateData['error']]);
        //}

        // Extract exchange rate from data
        $exchangeRate = $exchangeRateData['exchangeRate'];

        // Fetch the vertical ads
        $verticalAds = AdAndVideo::whereNotNull('vertical_ad')->get();
        $horizontalAds = AdAndVideo::whereNotNull('horizontal_ad')->get();
        $liveVideos = AdAndVideo::whereNotNull('video_upload')->get();

            // Fetch view and like data for short videos
       

        // Pass the derived data to the view
        return view('home', [
            'exchangeRate' => $exchangeRate, 
            'newsPosts' => $newsPosts,
            'verticalAds' => $verticalAds,
            'horizontalAds' => $horizontalAds,
            'liveVideos' => $liveVideos,
            'liveDesc' => $liveDesc,
            'shortVideos'=>$shortVideos,
        ]);
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
