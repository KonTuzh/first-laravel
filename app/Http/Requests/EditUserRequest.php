<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditUserRequest extends FormRequest
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
			'name'     => 'required|string|max:255',
			'email'    => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($request->id)],
			'password' => 'nullable|string|min:6|confirmed'
		];
	}
	
	public function messages()
	{
		return [
			'name.required'      => 'Укажите имя пользователя',
			'name.string'        => 'Имя должно быть строкой',
			'name.max'           => 'Максимально допустимо :max символов',
			'email.required'     => 'Обязательное поле',
			'email.max'          => 'Максимально допустимо :max символов',
			'email.unique'       => 'Пользователь с Email :input уже зарегистрирован',
			'email.string'       => 'Email должeн быть строкой',
			'email.email'        => 'Недопустимый формат',
			'password.string'    => 'Пароль должeн быть строкой',
			'password.confirmed' => 'Подтверждение не верное',
			'password.min'       => 'Пароль не должет быть короче :min символов',
		];
	}
}
