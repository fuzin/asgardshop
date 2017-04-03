<?php namespace Modules\Product\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateProductRequest extends BaseFormRequest
{
    public function rules()
    {
        return [];
    }

    public function translationRules()
    {
        $id = $this->route()->getParameter('product')->id;

        return [
            "name" => "required",
            "slug" => "required|unique:product__product_translations,slug,$id,product_id,locale,$this->localeKey",
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function translationMessages()
    {
        return [
            'name.required' => trans('blog::messages.title is required'),
            'slug.required' => trans('blog::messages.slug is required'),
            'slug.unique' => trans('blog::messages.slug is unique'),
        ];
    }
}

