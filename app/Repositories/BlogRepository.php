<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;

class BlogRepository implements BlogRepositoryInterface
{
	public function allBlogs()
	{
		return Blog::latest()->paginate(30);
	}

	public function storeBlog($data)
	{
		return Blog::create($data);
	}

	public function findBlog($blog)
	{
		return $blog;
	}

	public function updateBlog($data,$blog)
	{
		return $blog->update($data);
	}

	public function destroyBlog($blog)
	{
		return $blog->delete();
	}
}