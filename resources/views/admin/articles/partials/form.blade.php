<label for="published">Статус</label>
<select name="published" class="form-control">
	<option value="0">Черновик</option>
	<option value="1">Опубликовано</option>
</select>

<label for="title">Название</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок статьи" value="">

<label for="slug">URL</label>
<input type="text" class="form-control" name="slug" placeholder="Ссылка на статью" value="">

<label for="categories">Родительская категория</label>
<select name="categories[]" class="form-control" multiple="">
	<option value="1">Категория 1</option>
	<option value="2">Категория 2</option>
	<option value="3">Категория 3</option>
</select>

<label for="description_short">Анонс</label>
<textarea id="description_short" class="form-control" name="description_short" ></textarea>

<label for="description">Контент статьи</label>
<textarea id="description" class="form-control" name="description" ></textarea>

<label for="meta_title">Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="SEO заголовок" value="">

<label for="meta_description">Description</label>
<input type="text" class="form-control" name="meta_description" placeholder="SEO описание" value="">

<label for="meta_keyword">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="">

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">