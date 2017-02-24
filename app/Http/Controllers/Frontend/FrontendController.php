<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Establishment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class FrontendController extends Controller
{
    public function index()
    {
        $establishments = Establishment::all();
        return view('frontend.index', [
            'establishments' => $establishments
        ]);
    }

    public function restaurants()
    {
        $establishments = Establishment::all();
        return view('frontend.restaurants', [
            'establishments' => $establishments
        ]);
    }
}
