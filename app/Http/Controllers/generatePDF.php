<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Pdf;
use Illuminate\Support\Facades\View;

class generatePDF extends Controller
{
    public function index($id)
    {
        $donation_request = DonationRequest::find($id);
        return view('pdf.receipt' , compact('donation_request'));
    }
}
