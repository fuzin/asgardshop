<?php namespace Modules\Chat\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsernameRequest extends FormRequest
{
    public function rules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }

}