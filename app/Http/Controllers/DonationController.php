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

        $donors = Donor::all();
        $donors_locations = Donor::pluck('location')->unique();
        $donations = $query->paginate(12);
        return view('donations', compact('donations', 'donors', 'donors_locations'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donation = Donation::find($id);
        return view('donation', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
