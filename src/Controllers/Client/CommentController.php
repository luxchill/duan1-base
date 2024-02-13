<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Comment;

class CommentController extends Controller
{
	protected Comment $comment;

	public function __construct()
	{
		$this->comment = new Comment();
	}

	public function show($id)
	{
		$commet = $this->comment->getById($id);
		return $this->renderViewClient('comment', ['comment' => $commet]);
	}
}