<?php

namespace App\Http\Controllers;

use App\Models\DonationRequest;
/**/

class generatePDF extends Controller
{
    public function index($id)
    {
        $donation_request = DonationRequest::find($id);
        return view('pdf.receipt' , compact('donation_request'));
    }
}
