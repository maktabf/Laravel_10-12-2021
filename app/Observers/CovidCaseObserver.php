<?php

namespace App\Observers;

use App\Models\CovidCase;
use Illuminate\Support\Facades\Cache;

class CovidCaseObserver
{
    public function created(CovidCase $covidCase)
    {
        Cache::forget('cases');
    }
}
