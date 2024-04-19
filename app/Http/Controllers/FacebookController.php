<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $accessToken = $user->token;
    
            // Check if the user with this Facebook ID already exists in your database
            $existingUser = User::where('facebook_id', $user->id)->first();
    
            if ($existingUser) {
                // If user exists, redirect to the home page
                return redirect('/home')->with('success', 'Logged in successfully');
            } else {
                // If user does not exist, redirect to the registration page
                return redirect('/register')->with('info', 'Please complete your registration');
            }
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    private function getFacebookProfile($accessToken)
    {
        $response = Http::get("https://graph.facebook.com/v13.0/me", [
            'access_token' => $accessToken,
            'fields' => 'id,name,email,posts{message,created_time,attachments}',// Add additional fields as needed
        ]);

        return $response->json();
    }
    
}
