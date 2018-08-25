<div class="row admin-article">
	<div class="col-md-9">

		<div class="form-group">
			<label for="title">Название</label>
			<input type="text" 
						 @if ($errors->has('title')) class="form-control form-error" @else class="form-control" @endif
						 name="title" placeholder="Заголовок статьи" value="@if(old('title')){{old('title')}}@else{{$article->title or ""}}@endif">

			@if ($errors->has('title'))
				<div class="form-error-list">{{ $errors->first('title') }}</div>
			@endif
		</div>
	
		<div class="form-group">
			<label for="slug">URL (Уникальное значение)</label>
			<input type="text" 
						 @if ($errors->has('slug')) class="form-control form-error" @else class="form-control" @endif
						 name="slug" placeholder="Ссылка на статью" value="@if(old('slug')){{old('slug')}}@else{{$article->slug or ""}}@endif">

			@if ($errors->has('slug'))
				<div class="form-error-list">{{ $errors->first('slug') }}</div>
			@endif
		</div>
	
		<div class="form-group">
			<label for="description_short">Анонс статьи</label>
			<textarea id="description_short" @if ($errors->has('description_short')) class="form-control form-error" @else class="form-control" @endif
							  cols="30" rows="5" name="description_short" >@if(old('description_short')){{old('description_short')}}@else{{$article->description_short or ""}}@endif</textarea>
			
			@if ($errors->has('description_short'))
				<div class="form-error-list">{{ $errors->first('description_short') }}</div>
			@endif
		</div>
		
		<div class="form-group">
			<label for="description">Контент статьи</label>
			<textarea id="editable" @if ($errors->has('description')) class="form-control form-error" @else class="form-control" @endif
							  name="description" >@if(old('description')){{old('description')}}@else{{$article->description or ""}}@endif</textarea>
			
			@if ($errors->has('description'))
				<div class="form-error-list">{{ $errors->first('description') }}</div>
			@endif
		</div>
	
		<hr>
		<h4>Мета-теги</h4>
		<hr>

		<div class="form-group">
			<label for="meta_title">Title</label>
			<input type="text" @if ($errors->has('meta_title')) class="form-control form-error" @else class="form-control" @endif
						 name="meta_title" placeholder="SEO заголовок" value="@if(old('meta_title')){{old('meta_title')}}@else{{$article->meta_title or ""}}@endif">
			
			@if ($errors->has('meta_title'))
				<div class="form-error-list">{{ $errors->first('meta_title') }}</div>
			@endif
		</div>
		
		<div class="form-group">
			<label for="meta_description">Description</label>
			<textarea @if ($errors->has('meta_description')) class="form-control form-error" @else class="form-control" @endif
								name="meta_description" cols="30" rows="10" placeholder="SEO описание">@if(old('meta_description')){{old('meta_description')}}@else{{$article->meta_description or ""}}@endif</textarea>
			
			@if ($errors->has('meta_description'))
				<div class="form-error-list">{{ $errors->first('meta_description') }}</div>
			@endif
		</div>
		
		
		<div class="form-group">
			<label for="meta_keyword bootstrap-tagslabel">Ключевые слова</label>
			<input type="text" @if ($errors->has('meta_keyword')) class="form-control form-error" @else class="form-control" @endif
						 name="meta_keyword" data-role="tagsinput" placeholder="Слова, через запятую" value="@if(old('meta_keyword')){{old('meta_keyword')}}@else{{$article->meta_keyword or ""}}@endif">
			
			@if ($errors->has('meta_keyword'))
				<div class="form-error-list">{{ $errors->first('meta_keyword') }}</div>
			@endif
		</div>

	</div>
	
	{{-- right column --}}
	<div class="col-md-3">
	
		<div class="form-group">
			<label for="published">Статус</label>
			<select @if ($errors->has('published')) class="form-control form-error" @else class="form-control" @endif
							name="published">
				@if (isset($article->id))
					<option value="0" @if ($article->published == 0) selected=""	@endif>Черновик</option>
					<option value="1" @if ($article->published == 1) selected=""	@endif>Опубликовано</option>
				@else
					<option value="0">Черновик</option>
					<option value="1">Опубликовано</option>
				@endif
			</select>

			@if ($errors->has('published'))
				<div class="form-error-list">{{ $errors->first('published') }}</div>
			@endif
		</div>
	
		<div class="form-group">
			<label for="categories">Категории</label>
			<select name="categories[]" class="form-control">
				@include('admin.articles.partials.categories', ['categories' => $categories])
			</select>
		</div>
	
	</div>

</div>

<input class="btn btn-primary" type="submit" value="Сохранить">

<hr>