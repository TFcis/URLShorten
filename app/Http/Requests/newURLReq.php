<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newURLReq extends FormRequest
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
            'shortname' => 'required|alpha_dash',
            'url' => 'required|url'
        ];
    }

    /**
     * error message
     */
    public function messages()
    {
        return [
            'shortname.required' => '必填欄位',
            'shortname.alpha_dash' => '[A-Za-z0-9-_]',
            'url.required'  => '表單名稱是必填欄位',
            'url.url'  => '請輸入合法url'
        ];
    }
}
