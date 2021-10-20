<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertiseCampaign extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $name;
    /**
     * @var Carbon|mixed
     */
    private $to_date;
    /**
     * @var Carbon|mixed
     */
    private $from_date;
    /**
     * @var mixed
     */
    private $total_budget;
    /**
     * @var mixed
     */
    private $daily_budget;
    /**
     * @var mixed|string
     */
    private $image;

    public function gettotalBudgetAttribute($value)
    {
        return number_format($value,2);
    }

    public function getdailyBudgetAttribute($value)
    {
        return number_format($value,2);
    }
}
