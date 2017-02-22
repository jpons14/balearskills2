<?php

namespace App\Http\Controllers\Backend;

use App\Models\Comment;
use App\Models\Establishment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;


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
        if (count($comments) == 0) {
            Session::flash('errorMessage', trans('messages.errors.comments.no.comments'));
        }
        return view('backend.comments.index', [
            'comments' => $comments,
        ]);
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
        return view('backend.comments.create', [
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
    public function store(Request $request)
    {
        $error = false;
        $comment = new Comment();

        if (!isset($request->user) || $request->user == '') {
            $error = true;
            $errorMessage = trans('messages.errors.comments.needed.user');
        }
        if (!isset($request->establishment) || $request->establishment == '') {
            $error = true;
            $errorMessage = trans('messages.errors.comments.needed.establishment');
        }
        if (!isset($request->text) || $request->text == '') {
            $error = true;
            $errorMessage = trans('messages.errors.comments.needed.text');
        }
        if ($error) {
            return redirect()->route('comments.create')->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request->toArray()
            ]);
        }

        $comment->user_id = $request->user;
        $comment->establishment_id = $request->establishment;
        $comment->text = $request->text;

        if (!$comment->save()) {
            $errorMessage = trans('messages.errors.comments.couldnt.created');
            return redirect()->route('comments.create')->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request->toArray()
            ]);
        }

        $successMessage = trans('messages.success.comments.created');
        return redirect()->route('comments.show', $comment->id)->with('data', [
            'successMessage' => $successMessage
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
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
    public function edit($id)
    {
        $comment = Comment::find($id);
        $user = $comment->user;
        $establishment = $comment->establishment;
        $users = User::all();
        $establishments = Establishment::all();
        return view('backend.comments.edit', [
            'comment' => $comment,
            'userSelected' => $user,
            'users' => $users,
            'establishmentSelected' => $establishment,
            'establishments' => $establishments
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // todo: a revisar
        $request = \Request::all();

        $error = false;

        if (!isset($request['user']) || $request['user'] == '') {
            $error = true;
            $errorMessage = trans('messages.errors.comments.needed.user');
        }
        if (!isset($request['establishment']) || $request['establishment'] == '') {
            $error = true;
            $errorMessage = trans('messages.errors.comments.needed.establishment');
        }
        if (!isset($request['text']) || $request['text'] == '') {
            $error = true;
            $errorMessage = trans('messages.errors.comments.needed.text');
        }
        if ($error) {
            return redirect()->route('comments.edit', $id)->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request
            ]);
        }
        $comment = Comment::find($id);

        $comment->user_id = $request['user'];
        $comment->establishment_id = $request['establishment'];
        $comment->text = $request['text'];

        if (!$comment->save()) {
            $errorMessage = trans('messages.errors.comments.couldnt.updated');
            return redirect()->route('comments.update', $comment->id)->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request->toArray()
            ]);
        }

        $successMessage = trans('messages.success.comments.updated');

        return redirect()->route('comments.show', $comment->id)->with('data', [
            'successMessage' => $successMessage
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Comment::destroy($id)) {
            $errorMessage = trans('messages.errors.comments.couldnt.deleted');
            return redirect()->route('comments.index')->with('data', [
                'errorMessage' => $errorMessage
            ]);
        }

        $successMessage = trans('messages.success.comments.deleted');

        return redirect()->route('comments.index')->with('data', [
            'successMessage' => $successMessage
        ]);
    }
}
