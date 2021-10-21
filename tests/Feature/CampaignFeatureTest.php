<?php

namespace Tests\Feature;

    use App\Models\AdvertiseCampaign;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CampaignFeatureTest extends TestCase
{
    use WithFaker;

    /**
     * Fetch list of campaigns.
     *
     * @return void
     */
    public function campaign_can_be_fetched()
    {
        $response = $this->get('/api/advertise/index');

        $response->assertStatus(200);
    }

    public function test_create_campaign()
    {
        $data = [
            'name'          => $this->faker->name,
            'from'          => $this->faker->date(),
            'to'            => $this->faker->date(),
            'total_budget'  => $this->faker->randomDigit,
            'daily_budget'  => $this->faker->randomDigit,
            'creative'     =>  $this->faker->image
        ];
        $this->json('post','api/campaign/store', $data)
            ->assertStatus(201);
    }

    public function test_update_campaign()
    {
        $data = [
            'name'          => $this->faker->name,
            'from_date'     => $this->faker->date(),
            'to_date'        => $this->faker->date(),
            'total_budget'  => $this->faker->randomDigit,
            'daily_budget'  => $this->faker->randomDigit,
        ];
        $campaign = AdvertiseCampaign::first();
        $this->json('patch','api/advertise/update'.$campaign->id, $data)
            ->assertStatus(204);
    }

}
