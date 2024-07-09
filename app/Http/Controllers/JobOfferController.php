<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Seeker;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    public function register(Request $request, Offre $offer)
    {
        $seeker = Auth::user(); // Assuming the seeker is logged in

        // Attach the seeker to the offer
        $offer->seekers()->attach($seeker->id);

        return redirect()->back()->with('success', 'You have successfully registered for the offer!');
    }

  
}
