<?php


namespace App\Services;


use App\Models\AdvertiseCampaign;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ShowCampaign
{
    public function run($id)
    {
        $campaign = AdvertiseCampaign::find($id);
        if(!$campaign){
            throw new ModelNotFoundException($campaign, "The requested campaign doesn't exists");
        }
        return $campaign;
    }
}
