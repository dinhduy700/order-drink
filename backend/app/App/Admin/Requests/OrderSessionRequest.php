<?php

namespace App\App\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderSessionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'owner_invite' => 'required',
			'session_name' => 'required',
//			'menu_urls' => 'required',
			'budget_limit' => 'bail|required|integer',
        ];
    }

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array<string, string>
	 */
	public function messages(): array
	{
		return [
			'owner_invite.required' => 'Chủ xị không được bỏ trống!',
			'session_name.required' => 'Tên phiên đặt hàng không được bỏ trống!',
			'menu_urls.required' => 'Thực đơn (đường dẫn) không được bỏ trống!',
			'budget_limit.required' => 'Ngân sách không được bỏ trống!',
			'budget_limit.integer' => 'Ngân sách phải là số nguyên!',
		];
	}
}
