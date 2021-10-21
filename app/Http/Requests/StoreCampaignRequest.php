<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'total_budget' => 'required',
            'daily_budget' => 'required',
            'to_date' => 'required',
            'from_date' => 'required',
            'creative'     => 'required',
            'creative.*'   => 'mimes:jpg,jpeg,png',
        ];
    }
}
