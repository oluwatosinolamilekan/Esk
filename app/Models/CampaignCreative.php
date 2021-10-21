<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CampaignCreative extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_path',
        'campaign_id'
    ];

    public function campaign(): BelongsTo
    {
        return $this->belongsTo(AdvertiseCampaign::class,'advertise_campaigns');
    }
}
