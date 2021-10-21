<?php


namespace App\Services;


use App\Helper\File;
use App\Models\AdvertiseCampaign;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCampaign
{
    public function run($data)
    {
        DB::beginTransaction();
        $campaign = new AdvertiseCampaign();
        $campaign->name = $data['name'];
        $campaign->to_date = Carbon::parse($data['to_date']);
        $campaign->from_date = Carbon::parse($data['from_date']);
        $campaign->total_budget = $data['total_budget'];
        $campaign->daily_budget = $data['daily_budget'];
        $campaign->creative = File::storeImage($data);
        $campaign->save();
        DB::commit();
        return $campaign;
    }

}
