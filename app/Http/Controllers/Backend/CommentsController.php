<?php

namespace App\Http\Controllers\Backend;

use App\Models\Comment;
use App\Models\Establishment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view( 'backend.comments.index', [
            'comments' => $comments,
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $establishments = Establishment::all();
        return view( 'backend.comments.create', [
            'users' => $users,
            'establishments' => $establishments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $comment = new Comment();
        if (
            isset( $request->user ) && $request->user != ''
            && isset( $request->establishment ) && $request->establishment != ''
            && isset( $request->text ) && $request->text != ''
        ) {
            $comment->user = $request->user;
            $comment->establishment = $request->establishment;
            $comment->text = $request->text;
            $comment = $comment->save();
            $message = 'Comment created successfully';
        } else {
            $message = 'The comment could not be created';
        }
        return redirect()->route('comment.show', [
            'comment' => $comment->id,
            'message' => $message
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show( Comment $comment )
    {
        $user = $comment->user;
        $establishment = $comment->establishment;
        return view('backend.comments.show', [
            'comment' => $comment,
            'user' => $user,
            'establishment' => $establishment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $comment = Comment::find($id);
        $user = $comment->user;
        $establishment = $comment->establishment;
        return view('backend.comments.edit', [
            'comment' => $comment,
            'user' => $user,
            'establishment' => $establishment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id )
    {
        $request = Request::sll();
        $comment = Comment::find($id);
        if (
            isset( $request->user ) && $request->user != ''
            && isset( $request->establishment ) && $request->establishment != ''
            && isset( $request->text ) && $request->text != ''
        ) {
            $comment->user = $request->user;
            $comment->establishment = $request->establishment;
            $comment->text = $request->text;
            $comment = $comment->save();
        }
        return redirect()->route('comment.show', [
            'comment' => $comment->id,
            'message' => 'Comment updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        Comment::destroy($id);
        return redirect()->route('comments.index',[
            'message' => 'Comment deleted successfully'
        ]);
    }
}
