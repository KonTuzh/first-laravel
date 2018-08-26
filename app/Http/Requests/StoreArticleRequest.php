<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StoreArticleRequest extends FormRequest
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
			'title'              => 'required|string|max:255',
			'slug'               => ['required', 'max:255', Rule::unique('articles')->ignore($request->id), 'regex:/(^[a-z-0-9-]+$)/'],
			'description_short'  => 'required|string|max:255',
			'description'        => 'required|string|min:200',
			'thumbnail'          => 'nullable|mimes:jpeg,jpg|dimensions:min_width=1000,min_heaight=500',
			'meta_title'         => 'nullable|string|max:255',
			'meta_description'   => 'nullable|string|max:255',
			'meta_keyword'       => 'nullable|string|max:255',
			'published'          => 'boolean',
			'categories'         => 'nullable|array',
			'created_by'         => 'nullable|integer',
			'modified_by'        => 'nullable|integer',
		];
	}

	public function messages()
	{
		return [
			'title.required'             => 'Укажите заголовок статьи',
			'title.string'               => 'Не верный формат',
			'title.max'                  => 'Максимально допустимо :max символов',
			'slug.required'              => 'Обязательное поле',
			'slug.max'                   => 'Максимально допустимо :max символов',
			'slug.unique'                => 'URL :input уже существует',
			'slug.regex'                 => 'Недопустимое значение. Только цифры, тире и строчные латинские буквы',
			'description_short.required' => 'Обязательное поле',
			'description_short.string'   => 'Не верный формат',
			'description_short.max'      => 'Максимально допустимо :max символов',
			'description.required'       => 'Обязательное поле',
			'description.string'         => 'Не верный формат',
			'description.min'            => 'Миниимальное количество символов: :min',
			'thumbnail.mimes'            => 'Не верный формат файла. Разрешены файлы JPEG, JPG',
			'thumbnail.dimensions'       => 'Файл не должен быть меньше 1000px по ширине и 500px по высоте',
			'meta_title.string'          => 'Не верный формат',
			'meta_title.max'             => 'Максимально допустимо :max символов',
			'meta_description.string'    => 'Не верный формат',
			'meta_description.max'       => 'Максимально допустимо :max символов',
			'meta_keyword.string'        => 'Не верный формат',
			'meta_keyword.max'           => 'Максимально допустимо :max символов',
			'published.boolean'          => 'Недопустимое значение',
			'categories.array'           => 'Недопустимое значение'
		];
	}
}
