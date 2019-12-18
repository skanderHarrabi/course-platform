<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Comment;
use Auth;
class CommentController extends Controller
{
   public function storeComment(Request $request,Formation $formation)
   {
     $this->validate($request,[
       'body'=>'required'
     ]);
     $comment=Comment::create([
    'body'=>$request->body,
    'user_id'=>Auth::id(),
    'formation_id'=>$formation->id,
     ]);
     return back();
   }
   public function ReplayComment(Request $request,Comment $com)
   {
     $this->validate($request,[
       'body'=>'required'
     ]);
     $comment=Comment::create([
    'body'=>$request->body,
    'user_id'=>Auth::id(),
    'comment_id'=>$com->id,
     ]);
     return back();
   }

   
   public function store(Request $request,Formation $formation)
   {
      $comment = $formation->comments()->create([
          'body' => $request->body,
          'user_id'=>Auth::id()
      ]);
      $comment=Comment::where('id',$comment->id)->with('user')->first();
      return $comment->toJson();
   }
   public function destroy(Comment $comment)
   {
     if($comment->user_id !==Auth::id())
     {
       abort('401');
     }
     $comment->delete();
     return back();
   }
}
