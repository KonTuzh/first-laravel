<div class="row">
	<div class="form-group col-md-6">
		<label for="title">Название</label>
		<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{ $category->title or old('title')}}">

		@if ($errors->has('title'))
				<div class="alert alert-danger">{{ $errors->first('title') }}</div>
		@endif
	</div>

	<div class="form-group col-md-6">
		<label for="slug">URL (Уникальное значение)</label>
		<input type="text" class="form-control" name="slug" placeholder="Ссылка на категорию" value="{{ $category->slug or old('slug')}}" required>
		
		@if ($errors->has('slug'))
				<div class="alert alert-danger">{{ $errors->first('slug') }}</div>
		@endif
	</div>

	<div class="form-group col-md-6">
		<label for="parent_id">Родительская категория</label>
		<select class="form-control" name="parent_id">
			<option value="0">-- без родительской категории --</option>
			@include('admin.categories.partials.categories', ['categories' => $categories])
		</select>
		
		@if ($errors->has('parent_id'))
				<div class="alert alert-danger">{{ $errors->first('parent_id') }}</div>
		@endif
	</div>

	<div class="form-group col-md-6">
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

		@if ($errors->has('published'))
			<div class="alert alert-danger">{{ $errors->first('published') }}</div>
		@endif
	</div>
</div>

	<hr>

	<input class="btn btn-primary pull-right" type="submit" value="Сохранить">

