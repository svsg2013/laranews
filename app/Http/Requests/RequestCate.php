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
            //'txtName'=>'required|unique:categories,name',
			'slMenu'=>'required',
			//'slMenu'=>'required_if:seclection,-1'
			'txtName'=>'required|unique:categories,name|required_if:slMenu,-1',
        ];
    }
	
	public function messages(){
		return [
			'txtName.required'=>'Vui lòng nhập tiêu đề',
			'txtName.unique'=>'Tiêu đề đã tồn tại',
			'slMenu.required_if'=>'Vui long chon thu muc'
		];
	}
}
