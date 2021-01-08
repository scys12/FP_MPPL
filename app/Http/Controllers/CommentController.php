<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request, $id, $question_id)
    {
        $data['user_ids'] = $request->user()->id;
        $data['question_ids'] = $question_id;
        $data['comment'] = $request->comment;
        Comment::create($data);
        return redirect()->route('video_materi.question.show',['id' => $id, 'question_id' => $question_id])->with('status', 'Comment berhasil ditambah');
    }

    public function addCommentSoalMateri(Request $request, $id, $question_id)
    {
        $data['user_ids'] = $request->user()->id;
        $data['question_ids'] = $question_id;
        $data['comment'] = $request->comment;
        Comment::create($data);
        return redirect()->route('soal_materi.question.show',['id' => $id, 'question_id' => $question_id])->with('status', 'Comment berhasil ditambah');
    }

    public function deleteComment(Request $request, $id, $question_id)
    {
        $comment_id = $request->id;
        Comment::findOrFail($comment_id)->delete();
        return redirect()->back()->with('status', 'Comment berhasil dihapus');
    }
    
    public function updateCommentPage(Request $request, $id, $question_id, $comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        return view('client.video_materi.comment_update', compact('comment', 'id', 'question_id'));
    }

    public function updateComment(Request $request, $id, $question_id, $comment_id)
    {
        $data['comment'] = $request->comment;
        $comment = Comment::findOrFail($comment_id);
        $comment->update($data);
        return redirect()->route('video_materi.question.show', compact('id', 'question_id'))->with('status', 'Comment berhasil diedit');
    }

    public function updateCommentPageMateri(Request $request, $id, $question_id, $comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        return view('client.soal_materi.comment_update', compact('comment', 'id', 'question_id'));
    }

    public function updateCommentMateri(Request $request, $id, $question_id, $comment_id)
    {
        $data['comment'] = $request->comment;
        $comment = Comment::findOrFail($comment_id);
        $comment->update($data);
        return redirect()->route('soal_materi.question.show', compact('id', 'question_id'))->with('status', 'Comment berhasil diedit');
    }
}
