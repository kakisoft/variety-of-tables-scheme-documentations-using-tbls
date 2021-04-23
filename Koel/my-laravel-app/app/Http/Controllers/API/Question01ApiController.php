<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Services\CallMeAPI01;
use App\Models\Question01RegistrationInformation;

class Question01ApiController extends Controller
{
    public function callMeGet() {
        return Question01RegistrationInformation::callMeGet();
    }

    public function callMePost() {
        return Question01RegistrationInformation::callMePost();
    }

    public function challenge_usersGet() {
        return Question01RegistrationInformation::challenge_usersGet();
    }

    public function challenge_usersPost(Request $request) {
        $name  = $request->input('name');
        $email = $request->input('email');
        return Question01RegistrationInformation::challenge_usersPost($name, $email);
    }
}
