<?php

namespace Database\Factories;

use App\Models\AdvertiseCampaign;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertiseCampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdvertiseCampaign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'from_date' => Carbon::now(),
            'to_date' => Carbon::now()->addDays(30),
            'total_budget' => $this->faker->numberBetween(1000,4555),
            'daily_budget' => $this->faker->numberBetween(1000,4555),
        ];
    }
}
