<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
/**/
class Donation extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;

    protected $guarded = [];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }

    public function requests()
    {
        return $this->hasMany(DonationRequest::class);
    }
}
