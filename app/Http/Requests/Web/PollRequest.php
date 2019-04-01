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
            'username'      => 'required',
            'surname'       => 'required',
            'birthday'      => 'required',
            'address'       => 'required',
            'mobile'        => 'required',
            'repair'        => 'required',
            'likegorgia_1'  => 'int',
            'likegorgia_2'  => 'int',
            'likegorgia_3'  => 'int',
            'likegorgia_4'  => 'int',
            'likegorgia_5'  => 'int',
            'likegorgia_6'  => 'int',
            'likegorgia_7'  => 'int',
            'likegorgia_8'  => 'int',
            'likegorgia_9'  => 'int',
            'likegorgia_10' => 'int',
            'likegorgia_11' => 'int',
            'likegorgia_12' => 'int',
            'likegorgia_13' => 'int',
            'likegorgia_14' => 'int',
            'likegorgia_15' => 'int'
        ];
    }
}
