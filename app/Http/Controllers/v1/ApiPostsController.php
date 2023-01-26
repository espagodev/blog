<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\ApiController;
use App\Repositories\Posts;
use App\Repositories\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiPostsController extends ApiController
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
	 * @return \Illuminate\Http\Response
     */
    public function index()
	{
		$posts = $this->posts->all();
		// dd($posts);
		// dd($this->showAll($posts));
		return $posts;
	}


    /**
	 * Show single post
	 *
	 * @param string $id
	 *
	 * @return array $data
	 */
	public function show($id)
	{
		$post = $this->posts->find($id);
        
        $user = $this->users->find($post->userId);

        $data = ['post' => $post, 'user' => $user];
        
        return $data;
	}
}
