<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{
    use HasFactory;

    public function charity()
    {
        return $this->belongsTo(Charity::class);
    }

    public function Donation()
    {
        return $this->belongsTo(Donation::class);
    }


}
