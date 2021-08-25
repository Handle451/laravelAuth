<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect()->to(route('user.private'));
        }
        
        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required' 
        ]);

        if(User::where('email', $validateFields['email'])->exists()){
            return redirect()->to(route('user.registration'))->withErrors([
                'email' => 'Такой пользователь уже зарегистрирован'
            ]);
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect()->to(route('user.private'));
        }
        return redirect()->to(route('user.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
