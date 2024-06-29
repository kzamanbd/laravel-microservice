<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        // Validate the user's login credentials...
        // attempt to log the user in...
        // response success if the user is authenticated...
        // response error if the user is not authenticated...
    }
}
