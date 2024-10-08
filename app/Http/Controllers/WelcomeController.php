<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // $user = User::query()->create(
        //     [
        //         'name' => 'airton',
        //         'email'=> 'airton.mail.com',
        //         'password'=> 'teste123'
        //     ]
        //     );
            
        $user = User::find(1);
            
        dd($user);
    }
    
}
