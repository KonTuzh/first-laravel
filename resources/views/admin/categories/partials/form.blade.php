<label for="published">Статус</label>
<select name="published" class="form-control">
	@if (isset($category->id))
		<option value="0" @if ($category->published == 0) selected=""	@endif>Черновик</option>
		<option value="1" @if ($category->published == 1) selected=""	@endif>Опубликовано</option>
	@else
		<option value="0">Черновик</option>
		<option value="1">Опубликовано</option>
	@endif
</select>

<label for="title">Название</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$category->title or ""}}" required>

<label for="slug">URL (Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Ссылка на категорию" value="{{$category->slug or ""}}">

<label for="parent_id">Родительская категория</label>
<select class="form-control" name="parent_id">
	<option value="0">-- без родительской категории --</option>
	@include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">