<?php

use App\Articles;
use Illuminate\Http\Request;

/**
 * Вывести панель со статьями
 */
Route::get('admin/', function () {
    $article = new Articles();
    return view('articles',[
	'articles' => $article->all()
    ]);
});

/**
 * Вывести превьюшки статей
 */
Route::get('/', function () {
    //
});
/**
 * Добавить новую статью
 */
Route::post('admin/article', function (Request $request) {
    $validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
	return redirect('/')
			->withInput()
			->withErrors($validator);
    }
    $new_article = new Articles();
    $new_article->name = $request->name;
    $new_article->save();
    return redirect('/');
});

/**
 * Удалить статью
 */
Route::delete('admin/article/{article}', function (Articles $article) {
    //
});
Route::delete('admin/article/{article}', function (Articles $article) {
    //
});
