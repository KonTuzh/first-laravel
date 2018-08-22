<div class="row admin-article">
	<div class="col-md-9">

		<div class="form-group">
			<label for="title">Название</label>
			<input type="text" class="form-control" name="title" placeholder="Заголовок статьи" value="{{$article->title or ""}}">
		</div>
	
		<div class="form-group">
			<label for="slug">URL (Уникальное значение)</label>
			<input type="text" class="form-control" name="slug" placeholder="Ссылка на статью" value="{{$article->slug or ""}}">
		</div>
	
		<div class="form-group">
			<label for="description_short">Анонс статьи</label>
			<textarea id="description_short" class="form-control" cols="30" rows="5" name="description_short" >{{$article->description_short or ""}}</textarea>
		</div>
		
		<div class="form-group">
			<label for="description">Контент статьи</label>
			<textarea id="editable" class="form-control" name="description" >{{$article->description or ""}}</textarea>
		</div>
	
		<hr>
		<h4>Мета-теги</h4>
		<hr>

		<div class="form-group">
			<label for="meta_title">Title</label>
			<input type="text" class="form-control" name="meta_title" placeholder="SEO заголовок" value="{{$article->meta_title or ""}}">
		</div>
		
		<div class="form-group">
			<label for="meta_description">Description</label>
			<textarea class="form-control" name="meta_description" cols="30" rows="10" placeholder="SEO описание">{{$article->meta_description or ""}}</textarea>
		</div>
		
		
		<div class="form-group">
			<label for="meta_keyword bootstrap-tagslabel">Ключевые слова</label>
			<input type="text" class="form-control" name="meta_keyword" data-role="tagsinput" placeholder="Ключевые слова, через запятую" value="{{$article->meta_keyword or ""}}">
		</div>

	</div>
	
	{{-- right column --}}
	<div class="col-md-3">
	
		<div class="form-group">
			<label for="published">Статус</label>
			<select class="form-control" name="published">
				@if (isset($article->id))
					<option value="0" @if ($article->published == 0) selected=""	@endif>Черновик</option>
					<option value="1" @if ($article->published == 1) selected=""	@endif>Опубликовано</option>
				@else
					<option value="0">Черновик</option>
					<option value="1">Опубликовано</option>
				@endif
			</select>
		</div>
	
		<div class="form-group">
			<label for="categories">Родительская категория</label>
			<select name="categories[]" class="form-control" multiple="">
				@include('admin.articles.partials.categories', ['categories' => $categories])
			</select>
		</div>
	
	</div>

</div>

<input class="btn btn-primary" type="submit" value="Сохранить">

<hr>