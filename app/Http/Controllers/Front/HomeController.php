<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offre;

class HomeController extends Controller
{
    //
    public function index()
    {
        $allOffers = Offre::with('company')->get(); // Assuming 'company' is the relationship method in Offre model

        return view('front.inc.index', compact('allOffers'));
    }
}
