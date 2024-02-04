<?php

namespace App\Observers;

use App\Models\Donation;
use App\Models\DonationRequest;

class DonationRequestObserver
{


    /**
     * Handle the DonationRequest "updated" event.#
     */
    public function updated(DonationRequest $donationRequest)
    {
        // Find other DonationRequests related to the same Donation
        $relatedRequests = DonationRequest::where('donation_id', $donationRequest->donation_id)
            ->where('id', '!=', $donationRequest->id) // Exclude the current request
            ->where('donation_status', 'ينتضر')
            ->get();

        // Update all related DonationRequests to 'rejected'
        foreach ($relatedRequests as $relatedRequest) {
            $relatedRequest->update(['donation_status' => 'لم يتم التبرع له ', 'request_status' => 'تم التبرع لجهة أخرى']);
        }
        // $donation = Donation::find($donationRequest->donation_id);
        // $donation->status = 'تم التبرع';
        // $donation->save();

    }
}
