<?php


namespace App\Services;


use App\Models\AdvertiseCampaign;

class ShowCampaign
{
    public function run($id)
    {
        $campaign = AdvertiseCampaign::find($id);
        if($campaign  == null){
            throw new \Exception("The requested campaign doesn't exists");
        }
        return $campaign;
    }
}
