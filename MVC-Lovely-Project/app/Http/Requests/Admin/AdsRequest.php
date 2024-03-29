<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class AdsRequest extends Request
{
    public function rules()
    {
        if (methodField() == 'put') {
            return [
                'title' => 'required|max:191',
                'description' => 'required|max:1000',
                'address' => 'required|max:191',
                'amount' => 'required|max:191',
                'image' => 'file|mimes:jpg,jpeg,jpg,png,gif',
                'parking' => 'required|number',
                'tag' => 'required|max:191',
                'cat_id' => 'required|exist:categories,id',
                'sell_status' => 'required|number',
                'type' => 'required|number',
            ];
        } else {
            return [
                'title' => 'required|max:191',
                'description' => 'required|max:1000',
                'address' => 'required|max:191',
                'amount' => 'required|max:191',
                'image' => 'required|file|mimes:jpg,jpeg,jpg,png,gif',
                'parking' => 'required|number',
                'tag' => 'required|max:191',
                'cat_id' => 'required|exist:categories,id',
                'sell_status' => 'required|number',
                'type' => 'required|number',
            ];
        }
    }
}