<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CommentPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
      // Any user can create a new comment
      return Auth::check();
    }

    public function edit(User $user, Comment $comment)
    {
      // Only an comment's author or admin can edit it
      return $user->user_id == $comment->user_id || $user->is_admin;
    }

    public function update(User $user, Comment $comment)
    {
      // Only an comment's author can update it
      return $user->user_id == $comment->user_id || $user->is_admin;
    }

    public function delete(User $user, Comment $comment)
    {
      // Only a comment's author or admin can delete it
      return $user->user_id == $comment->author_id || $user->is_admin;
    }

    public function vote(User $user, Comment $comment)
    {
      // Any user can vote on a comment
      return Auth::check();
    }
}
