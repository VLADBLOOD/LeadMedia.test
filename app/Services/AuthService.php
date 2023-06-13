<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthService
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Вы аторизованы');
        }

        return redirect()->route("login")->with('error', 'Неверные данный учетной записи');
    }

    public function registrate(RegistrationRequest $request)
    {
        $accountData = $request->all();
        $check = $this->createNewUser($accountData);

        return redirect()->route("dashboard")->with('success', 'Учетная запись создана');
    }

    public function createNewUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect()->route('dashboard')->with('success', 'Выход из аккаунта');
    }
}
