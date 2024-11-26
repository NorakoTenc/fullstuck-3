<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShrineController extends Controller
{
    public function choose()
    {
        return view('ShrineChoose');
    }

    public function bernkastel()
    {
        return view('ShrineBernkastel');
    }

    public function lambdadelta()
    {
        return view('ShrineLambdadelta');
    }

    public function beatrice()
    {
        return view('ShrineBeatrice');
    }

    public function virgilia()
    {
        return view('ShrineVirgilia');
    }

    public function withParameter($name)
    {
        return view('dynamicShrine', ['name' => $name]);
    }
}
