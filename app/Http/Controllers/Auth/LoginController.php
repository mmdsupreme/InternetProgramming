<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Этот контроллер обрабатывает аутентификацию пользователей для приложения и
    | перенаправляя их на домашний экран.
    |
    */

    use AuthenticatesUsers;

    /**
     * Куда перенаправлять пользователей после входа в систему.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Создать новый экземпляр контроллера.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
