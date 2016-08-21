<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WebEngRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name1' => 'required',
            'reg1' => 'required|min:10|numeric',
            'name2' => 'required',
            'reg2' => 'required|min:10|numeric',
        ];
    }
}
