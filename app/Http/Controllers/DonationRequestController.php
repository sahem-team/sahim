<?php

namespace App\Http\Controllers;

use App\Models\DonationRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DonationRequestController extends Controller
{

    /**
     * Store a newly created resource in storage.#
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
}
