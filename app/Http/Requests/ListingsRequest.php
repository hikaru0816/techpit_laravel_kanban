<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingsRequest extends FormRequest
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
            'list_name' => 'required|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'list_name' => 'リスト名',
        ];
    }

    public function messages()
    {
        return [
            'list_name.required' => 'リスト名を入力してください',
            'list_name.max' => 'リスト名は255文字以内で入力してください'
        ];
    }
}
