<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // // create method
    // Post::create([
	// 	'title'=>'created title',
	// 	'content'=>'created content',
	// ]);

    // // save method 
    // $post = new Post();
	// $post->title = "test title";
	// $post->content = "test content";
	// $post->save();

    // // find method (id = 1 data)
    // $post = Post::find(1);
	// echo '標題: '.$post->title.'<br>';
	// echo '內容: '.$post->content.'<br>';
	// dd($post);

    // // all method (all data)
    // $posts = Post::all();

	// // each loop(foreach) fetch one post in sequence
	// foreach($posts as $post){
	// 	echo '編號: '.$post->id.'<br>';
	// 	echo '標題: '.$post->title.'<br>';
	// 	echo '內容: '.$post->content.'<br>';
	// 	echo '張貼時間: '.$post->created_at.'<br>';
	// }
	// dd($post);

    // // where method (id < 10)
	// $posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
	// dd($posts);

    // // update method update data (id = 1 data)
    // $post = Post::find(1);
    // $post->update([
    //     'title'=>'updated title',
    //     'content'=>'updated content',
    // ]);

    // // save method update data (id = 1 data)
    // $post = Post::find(1);
	// $post->title = "saved title";
	// $post->content = "saved content";
	// $post->save();

    // delete and destroy method => delete data
    $post = Post::find(1);
	$post->delete();

	Post::destroy(2);

	Post::destroy(3, 5, 7);

	return 'OK!';
});
