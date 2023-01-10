<?php

namespace App\Repositories\Interfaces;

Interface BlogRepositoryInterface{
	public function allBlogs();
	public function storeBlog($data);
	public function findBlog($blog);
	public function updateBlog($data,$blog);
	public function destroyBlog($blog);
}