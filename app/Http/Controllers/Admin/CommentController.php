<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {

        $comments = Comment::latest()->get();

        return view('admin.coment',compact('comments'));
    }


    // public function show(MembershipJoin $membershipJoin)
    // {
    //     return view('admin.join_show', compact('membershipJoin'));
    // }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        toast('Comment Message Deleted Successfully', 'success');

        return back();
    }
}

