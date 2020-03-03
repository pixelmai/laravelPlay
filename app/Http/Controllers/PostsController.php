<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class PostsController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
		$users = auth()->user()->following()->pluck('profiles.user_id');

		//$posts = Post::whereIn('user_id', $users)->orderBy('created_at', 'DESC')->get();
		$posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
		
		//dd($posts);

		return view('posts.index', compact('posts'));
	}

	public function create()
	{
		return view('posts.create');
	}

	public function store()
	{
		$data = request()->validate([
			'caption' => 'required',
			'image' => 'required|image'
		]);



		/* DREAMHOST CHANGES 

		$imagePath = request('image')->store('uploads','public');
		$storagePath = storage_path("{$imagePath}");
		
		$image = Image::make(request('image')->getRealPath())->fit('1200','1200')->save($storagePath);

		*/


		$imagePath = request('image')->store('uploads','public');

		$image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
		$image->save();

		auth()->user()->posts()->create([
			'caption' => $data['caption'],
			'image' => $imagePath

		]);

		//dd(request()->all());

		return redirect('/profile/' . auth()->user()->id);
	}

	public function show(\App\Post $post)
	{
		//dd($post);

		return view('posts.show', compact('post'));
	}

}
