<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest
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
	public function rules(Request $request)
	{
		return [
			'key'          => 'required|string|max:255',
			'permissions'  => 'required|array'
		];
	}
	
	public function messages()
	{
		return [
			'key.required'         => 'Укажите название роли',
			'key.string'           => 'Название должно быть строкой',
			'key.max'              => 'Максимально допустимо :max символов',
			'permissions.required' => 'Обязательное поле',
			'permissions.array'    => 'Не верный формат'
		];
	}
}
