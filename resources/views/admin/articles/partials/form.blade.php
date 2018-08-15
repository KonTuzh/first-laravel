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

<label for="title">Название</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок статьи" value="{{$article->title or ""}}">

<label for="slug">URL (Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Ссылка на статью" value="{{$article->slug or ""}}">

<label for="categories">Родительская категория</label>
<select name="categories[]" class="form-control" multiple="">
	@include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="description_short">Анонс статьи</label>
<textarea id="description_short" class="form-control" name="description_short" >{{$article->description_short or ""}}</textarea>

<label for="description">Контент статьи</label>
<textarea id="editable" class="form-control" name="description" >{{$article->description or ""}}</textarea>

<label for="meta_title">Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="SEO заголовок" value="{{$article->meta_title or ""}}">

<label for="meta_description">Description</label>
<textarea class="form-control" name="meta_description" cols="30" rows="10" placeholder="SEO описание">{{$article->meta_description or ""}}</textarea>

<label for="meta_keyword">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$article->meta_keyword or ""}}">

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">