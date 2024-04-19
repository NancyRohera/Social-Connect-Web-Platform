<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Models\User;

class RegistrationController extends Controller 
{
    public function showRegistrationForm()
{
    return view('register');
}

protected function create(Request $request)
{
    $this->validate($request, [
        'name' => 'required|string|max:50',
        'email' => 'required|string|email|max:50|unique:users',
        'University_id' => 'required|string|max:50|unique:users',
        'phone_no' => 'required|string|max:50|unique:users',
        'semester' => 'required|integer',
        'password' => 'required|string|max:255|confirmed',
    ]);
    $user = $this->createUser($request);
    
    return redirect('login');
}




protected function createUser(Request $request)
{
    try {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'University_id' => $request->University_id,
            'phone_no' => $request->phone_no,
            'semester' => $request->semester,
            'password' => bcrypt($request->password),
        ]);
     
    } catch (\Exception $e) {
        return $e->getMessage(); // Log or handle the exception as needed
    }
    
}

    
    public function __invoke()
    {
        
        return $this->showRegistrationForm();
    }
}