<?php

namespace App\Http\Controllers\Admin\Image;

use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;

class UploadImageController extends Controller
{
	public function thumbnail(UploadedFile $file, string $name)
	{
		// throw new \Exception("не буду сохранять картинку");

		$img = \Img::make($file);
		$path = storage_path('app/public/images/blog/'.$name.'.jpg');

		$img->resize(1000, null, function ($constraint) {
			$constraint->aspectRatio();
		});
		
		$img->save($path);

		return $url = \Storage::disk('public')->url('images/blog/'.$name.'.jpg');
	}
}
