<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(): string
    {
        return 'Hello';
    }

    public function showId(string $id): string
    {
        return 'Hello ' . $id;
    }
}
