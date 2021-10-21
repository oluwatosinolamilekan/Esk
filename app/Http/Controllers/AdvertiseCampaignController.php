<?php

namespace App\Http\Controllers;

use App\Helper\DisplayResponse;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Resources\CampaignResource;
use App\Services\CreateCampaign;
use App\Services\EditCampaign;
use App\Services\ListsCampaigns;
use App\Services\ShowCampaign;
use Exception;
use Illuminate\Http\Request;

class AdvertiseCampaignController extends Controller
{
    public function index()
    {
        $campaigns = (new ListsCampaigns())->run();
        return CampaignResource::collection($campaigns);
    }

    public function store(StoreCampaignRequest $request)
    {
        try {
            $campaign = (new CreateCampaign())->run($request);
            return new CampaignResource($campaign);
        }catch (Exception $exception){
            return response()->json(DisplayResponse::reFailed($exception->getMessage()),500);
        }
    }

    public function show($id)
    {
        try {
            $campaign = (new ShowCampaign())->run($id);
            return new CampaignResource($campaign);
        }catch (Exception $exception){
            return response()->json(DisplayResponse::reFailed($exception->getMessage()),500);
        }
    }

    public function edit(Request $request,$id)
    {
        try {
            $campaigns = (new EditCampaign())->run($request,$id);
            return new CampaignResource($campaigns);
        }catch (Exception $exception){
            return response()->json(DisplayResponse::reFailed($exception->getMessage()),500);
        }
    }

}
