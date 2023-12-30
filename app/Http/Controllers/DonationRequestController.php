<?php

namespace App\Http\Controllers;

use App\Models\DonationRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DonationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $donation_request = new DonationRequest();
        $donation_request->message = $request->message;
        $donation_request->charity_id = auth()->user()->charity->id;
        $donation_request->donation_id = $request->donation_id;
        $donation_request->save();
        Alert::success('تم إرسال الطلب بنجاح');

        return redirect('/donations');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
