<label for="published">Статус</label>
<select name="published" class="form-control">
	<option value="0">Черновик</option>
	<option value="1">Опубликовано</option>
</select>

<label for="title">Название</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="">

<label for="slug">URL</label>
<input type="text" class="form-control" name="slug" placeholder="Ссылка на категорию" value="">

<label for="parent_id">Родительская категория</label>
<select name="parent_id" class="form-control">
	<option value="0">-- без родительской категории --</option>
	<option value="1">Категория 1</option>
	<option value="2">Категория 2</option>
	<option value="3">Категория 3</option>
</select>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">