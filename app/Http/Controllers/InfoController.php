<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Brand;
use App\Serie;
use App\Part;

class InfoController extends Controller
{
    public function create()
    {

        $brands = Brand::all();
        $series = Serie::all();
        $parts = Part::all();
        return view('create-info', compact('brands', 'series', 'parts'));

    }

    public function evaluate()
    {
        $license_plate = request('license_plate');
        $color = request('color');

        $brand = Brand::find(request('brand'));
        $serie = Serie::find(request('serie'));
        $part = Part::find(request('part'));

        return view('eval', compact('license_plate', 'color', 'brand', 'serie', 'part'));

    }

    public function print()
    {

        $license_plate = request('license_plate');
        $color = request('color');

        $brand = request('brand');
        $serie = request('serie');
        $part = request('part');
        $total = request('total');


        $spares_array = json_decode(request('spares'), true);
        $spares = collect($spares_array);

        //return view('summary', compact('spares', 'total', 'license_plate', 'color', 'brand', 'serie', 'part'));


        $pdf = PDF::loadView('summary', compact('spares', 'total', 'license_plate', 'color', 'brand', 'serie', 'part'));
        return $pdf->download($license_plate . '.pdf');
    }


}
