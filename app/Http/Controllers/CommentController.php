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
        return redirect()->route('video_materi.question.show',['id' => $id, 'question_id' => $question_id]);
    }

    public function addCommentSoalMateri(Request $request, $id, $question_id)
    {
        $data['user_ids'] = $request->user()->id;
        $data['question_ids'] = $question_id;
        $data['comment'] = $request->comment;
        Comment::create($data);
        return redirect()->route('soal_materi.question.show',['id' => $id, 'question_id' => $question_id]);
    }
}
