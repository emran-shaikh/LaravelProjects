<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $data = ['name'=>'furqan'];
        $data['users'] = User::all();
        return view('users.users', $data);
    }

    
}
