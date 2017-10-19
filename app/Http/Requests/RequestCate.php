<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtName'=>'required|unique:categories,name',
			'slMenu'=>'required'
        ];
    }
	
	public function messages(){
		return [
			'txtName.required'=>'Vui long nhap tieu de',
			'txtName.unique'=>'Tieu de da ton tai',
			'slMenu.required'=>'Vui long chon thu muc',
		];
	}
}
