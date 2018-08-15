$(document).ready(function(){

	if($("#editable").length > 0){
		tinymce.init({
			selector: "textarea#editable",
			directionality : 'ltr',
			language: 'ru',
			theme: "modern",
			height:400,
			plugins: [
				"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				"save table contextmenu directionality emoticons template paste textcolor"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
			block_formats: 'Paragraph=p;Header 1=h1;Header 2=h2;Header 3=h3',
			style_formats: [
				{title: 'Заголовок 1', block: 'h1'},
				{title: 'Заголовок 2', block: 'h2'},
				{title: 'Заголовок 3', block: 'h3'},
				{title: 'Заголовок 4', block: 'h4'},
				{title: 'Цитата', block: 'blockquote'},
				{title: 'Параграф', inline: 'b'},
				{title: 'Example 2', inline: 'span', classes: 'example2'},
				{title: 'Красный', inline: 'span', classes: 'msg_error'},
				{title: 'Table styles'},
				{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			]
		});
	}

	$('.dropify').dropify({
		messages: {
			'default': 'Перетащите файл сюда или кликните',
			'replace': 'Кликните, чтобы заменить изображение',
			'remove': 'Удалить',
			'error': 'Ошибка загрузки'
		},
		error: {
			'fileSize': 'Большой размер файла (максимум 1Мб).'
		}
	});

});