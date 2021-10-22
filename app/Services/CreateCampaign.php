<?php


namespace App\Services;


use App\Helper\File;
use App\Models\AdvertiseCampaign;
use App\Models\CampaignCreative;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $campaign->save();
        foreach ($data->file('creatives') as $creative) {
            $saveCreative = new CampaignCreative;
            $saveCreative->campaign_id = $campaign->id;
            $saveCreative->img_path  = Storage::put('campaign', $creative);
            $saveCreative->save();
        }

        DB::commit();
        return $campaign;
    }

}
