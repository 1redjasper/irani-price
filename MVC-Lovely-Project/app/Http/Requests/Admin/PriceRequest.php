<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class PriceRequest extends Request
{
    public function rules()
    {
        if (methodField() == 'put') {
            return [
                'title' => 'required|max:191',
                'description' => 'required|max:1000',
                'amount' => 'required|max:191',
                'dollar_amount' => 'required|max:191',
                'image' => 'file|mimes:jpg,jpeg,jpg,png,gif',
                'tag' => 'required|max:191',
                'cat_id' => 'exist:categories,id',
                'sell_status' => 'required|number',
                'type' => 'required|number',
            ];
        } else {
            return [
                'title' => 'required|max:191',
                'description' => 'required|max:1000',
                'amount' => 'required|max:191',
                'dollar_amount' => 'required|max:191',
                'image' => 'required|file|mimes:jpg,jpeg,jpg,png,gif',
                'tag' => 'required|max:191',
                'cat_id' => 'exist:categories,id',
                'sell_status' => 'required|number',
                'type' => 'required|number',
            ];
        }
    }
}