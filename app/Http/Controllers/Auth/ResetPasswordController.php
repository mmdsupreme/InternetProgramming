<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Этот контроллер отвечает за обработку запросов на сброс пароля
    | и использует простую черту, чтобы включить это поведение. Вы свободны
    | изучить эту черту и переопределить любые методы, которые вы хотите настроить.
    |
    */

    use ResetsPasswords;

    /**
     * Куда перенаправлять пользователей после сброса их пароля.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Создать новый экземпляр контроллера.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
