<?php namespace Modules\Product\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateProductRequest extends BaseFormRequest
{
    protected $translationsAttributesKey = 'product::products.validation.attributes';

    public function rules()
    {
        return [
            'EAN' => 'required',
        ];
    }

    public function translationRules()
    {

        return [
            'name' => 'required',
        ];

    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'EAN.required' => trans('product::messages.name is required'),
            // 'is_home.unique' => trans('page::messages.only one homepage allowed'),
        ];
    }

    public function translationMessages()
    {
        return [
            'name.required' => trans('product::messages.EAN is required'),
            //'body.required' => trans('page::messages.body is required'),
        ];
    }
}
