<?php

namespace Tests\Feature;

    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CampaignFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

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


}
