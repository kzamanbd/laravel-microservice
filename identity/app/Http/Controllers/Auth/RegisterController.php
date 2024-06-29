<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        // Validate the user's registration credentials...
        // create a new user...
        // response success if the user is created...
        // response error if the user is not created...
    }
}
