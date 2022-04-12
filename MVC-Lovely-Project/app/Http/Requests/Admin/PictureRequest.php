<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class PictureRequest extends Request
{
    public function rules()
    {
        return [
            'image' => 'required|file|mimes:jpg,jpeg,jpg,png,gif',
        ];
    }
}