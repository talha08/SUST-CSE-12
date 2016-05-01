<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FileRequest extends Request
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
            'file_type' => 'required',
            'file_name' => 'required',
            'file_link' => 'required_if:thisfile,null|url',
            'thisfile' => 'required_if:file_link,null'
        ];
    }
}
