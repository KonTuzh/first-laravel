<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
			'title'       => 'required|string|max:255',
			'slug'        => ['required', 'max:255', Rule::unique('categories')->ignore($request->id), 'regex:/(^[a-z-0-9-]+$)/'],
			'parent_id'   => 'integer|max:255',
			'published'   => 'integer|max:255'
		];
	}
	
	public function messages()
	{
		return [
			'title.required'    => 'Укажите название категории',
			'title.string'      => 'Название должно быть строкой',
			'title.max'         => 'Максимально допустимо :max символов',
			'slug.required'     => 'Поле обязательно',
			'slug.max'          => 'Максимально допустимо :max символов',
			'slug.unique'       => 'URL :input уже существует',
			'slug.regex'        => 'Недопустимое значение. Только цифры, тире и строчные латинские буквы',
			'parent_id.integer' => 'ID категории должно быть числом',
			'parent_id.max'     => 'Максимально допустимо :max символов',
			'published.integer' => 'Значение должно быть числом',
			'published.max'     => 'Максимально допустимо :max символов',
		];
	}
}
