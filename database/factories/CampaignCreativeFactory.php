<?php

namespace Database\Factories;

use App\Models\CampaignCreative;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignCreativeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CampaignCreative::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'img_path' => "campaign/{$this->faker->image('public/storage/campaign/', 640, 480, null, false)}"
        ];
    }
}
