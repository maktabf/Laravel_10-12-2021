<?php

namespace App\Http\Controllers;

use App\Http\Resources\CovidCaseResource;
use App\Models\CovidCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CovidCaseController extends Controller
{
    public function index()
    {
        return CovidCaseResource::collection(Cache::remember('cases', 60*60*24, fn() => CovidCase::all()));
    }
}
