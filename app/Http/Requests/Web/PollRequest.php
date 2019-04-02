<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class PollRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sex'           => 'required',
            'idnumber'      => 'required',
            'username'      => 'required',
            'surname'       => 'required',
            'birthday'      => 'required',
            'address'       => 'required',
            'mobile'        => 'required',
            'repair'        => 'required',
            'cat_id'        => 'required|array',
            'cat_id.*'      => 'exists:likecategories,id'
        ];
    }
}
