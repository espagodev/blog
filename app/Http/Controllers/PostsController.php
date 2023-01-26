<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use App\Repositories\Users;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class PostsController extends Controller
{
    /**
	 * @var Posts
     * @var Users
	 */
	private $posts;
    private $users;

	public function __construct(Posts $posts, Users $users)
	{

		$this->posts = $posts;
        $this->users = $users;
	}

	/**
	 * Show all posts
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function index()
	{
		$posts = $this->posts->all();
		return view('posts.index', compact('posts'));
	}

	/**
	 * Show single post
	 *
	 * @param string $id
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function show($id)
	{
		$post = $this->posts->find($id);
        
        $user = $this->users->find($post->userId);
		return view('posts.show', compact('post','user'));
	}


	/**
	 * @return \Illuminate\Contracts\Support\Renderable 
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException 
	 */
	public function create(): Renderable
	{
		return view('posts.components.modals.modal_nuevo');
	}

	/**
	 * @param \Illuminate\Http\Request $request 
	 * @return \Illuminate\Http\RedirectResponse 
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException 
	 */
	public function store(Request $request): RedirectResponse{

		try{
			$rules = [
				'title' => 'required',
				'body' => 'required',
			];
	
			$this->validate($request, $rules);
	
			$data = $request->all();
			
			return redirect()->route('posts')->with('success', 'Post Creado');
		}catch(Exception $e){
			return redirect()->back()->with('error', 'Se encontro un error');
		}
		
	}
}
