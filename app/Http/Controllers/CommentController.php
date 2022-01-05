<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    //

    public function create(Request $request, $slug){
        $request->validate([
            'commentator_name' => 'required',
            'commentator_email' => 'required',
            'comment' => 'required'
        ]);
        $data = array(
            'username' => $request->input('commentator_name'),
            'email' =>  $request->input('commentator_email'),
            'post_id' =>   $request->input('post_id'),
            'content' =>  $request->input('comment')
        );

        Comment::create($data);
        return redirect('/blog/'.$slug.'#comments')->with('message', "Your Comment has been published.");      
    }
}
