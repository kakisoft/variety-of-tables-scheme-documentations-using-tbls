<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Question02ApiController extends Controller
{
    public function callMyApis_GET() {
        return "callMyApis_GET";
    }

    public function callMyAPIS_POST() {
        return "callMyAPIS_POST";
    }

    public function callMyAPIS_PUT() {
        return "callMyAPIS_PUT";
    }

    public function callMyAPIS_DELETE() {
        return "callMyAPIS_DELETE";
    }

    public function callMyAPIS_PATCH() {
        return "callMyAPIS_PATCH";
    }

    public function callMyApis_OPTIONS() {
        return "callMyApis_OPTIONS";
    }

}
