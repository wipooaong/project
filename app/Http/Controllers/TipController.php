<?php

namespace App\Http\Controllers;

use GrahamCampbell\Markdown\Facades\Markdown;

use Illuminate\Http\Request;
use App\Knowledge;

class TipController extends Controller
{
    public function index()
    {
        $knowledge = Knowledge::all();
        return view('tips', compact('knowledge'));
    }
}
