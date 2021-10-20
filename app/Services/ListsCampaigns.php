<?php


namespace App\Services;


use App\Models\AdvertiseCampaign;

class ListsCampaigns
{
    public function run()
    {
        return AdvertiseCampaign::latest()->paginate(10);
    }
}
