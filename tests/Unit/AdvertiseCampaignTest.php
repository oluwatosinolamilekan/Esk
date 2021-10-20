<?php

namespace Tests\Unit;
use App\Models\AdvertiseCampaign;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Tests\TestCase;

class AdvertiseCampaignTest extends TestCase
{
    public function test_campaign_can_be_created()
    {
//        $data = $this->getData();
//        $response = $this->post('/api/advertise/store',$data);
//        $response->assertJson($data);
        $campaign = AdvertiseCampaign::factory()->create();
        $response = $this->get( '/api/advertise/index' );
        $response->assertSee( $campaign->name );
        $response->assertStatus( 200 );
    }

    private function getData(): array
    {
        $faker = Faker::create();
        return [
            'name' => "New Product",
            'from_date' => Carbon::now(),
            'to_date' => Carbon::now()->addDays(30),
            'total_budget' => $faker->numberBetween(1000,4555),
            'daily_budget' => $faker->numberBetween(1000,4555),
            'image' => $faker->image()
        ];
    }

}
