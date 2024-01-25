<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Create the filter query
        $query = Donation::query();

        if ($request->filled('donationName')) {
            $query->where('donation_name', 'like', '%' . $request->input('donationName') . '%');
        }

        if ($request->filled('donorName')) {
            $query->whereHas('donor', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->input('donorName') . '%');
            });
        }

        if ($request->filled('location')) {
            $query->whereHas('donor', function ($q) use ($request) {
                $q->where('location', 'like', '%' . $request->input('location') . '%');
            });
        }

        if ($request->filled('createDate')) {
            $query->whereDate('created_at', '<', $request->input('createDate'));
        }

        if ($request->filled('expireDate')) {
            $query->whereDate('expiration_date', '>', $request->input('expireDate'));
        }

        $donors = Donor::all(); // donors to use them in donors filter select dropdown
        $donors_locations = Donor::pluck('location')->unique(); // distinct donors locations to use them in locations filter select dropdown
        $donations = $query->paginate(12); // filtered donations
        return view('donations.donations', compact('donations', 'donors', 'donors_locations'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donation = Donation::find($id);
        return view('donations.donation', compact('donation'));
    }

}
