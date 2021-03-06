<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function addQuestion(Request $request, $id)
    {
        $data['user_ids'] = $request->user()->id;
        $data['type'] = $request->type;
        $data['question'] = $request->question;
        $data['product_ids'] = $id;
        Question::create($data);
        return redirect()->route('video_materi.show', ['id' => $id]);
    }
    public function addQuestionSoalMateri(Request $request, $id)
    {
        $data['user_ids'] = $request->user()->id;
        $data['type'] = $request->type;
        $data['question'] = $request->question;
        $data['product_ids'] = $id;
        Question::create($data);
        return redirect()->route('soal_materi.show', ['id' => $id]);
    }
    
    public function showQuestion(Request $request, $id, $question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('client.video_materi.comment', compact('question', 'id'));
    }

    public function showQuestionSoalMateri(Request $request, $id, $question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('client.soal_materi.comment', compact('question', 'id'));
    }

    public function deleteQuestion(Request $request)
    {
        $id = $request->id;        
        Question::findOrFail($id)->delete();
        return redirect()->back()->with('status', 'Pertanyaan berhasil dihapus');
    }

    public function updateQuestionPage($id, $question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('client.video_materi.question_update', compact('question', 'id'));
    }
    
    public function updateQuestion(Request $request, $id, $question_id)
    {
        $data['question'] = $request->question;
        $question = Question::findOrFail($question_id);
        $question->update($data);
        return redirect()->route('video_materi.show', compact('id'))->with('status', 'Pertanyaan berhasil diubah');
    }

    public function updateQuestionPageMateri($id, $question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('client.soal_materi.question_update', compact('question', 'id'));
    }
    
    public function updateQuestionMateri(Request $request, $id, $question_id)
    {
        $data['question'] = $request->question;
        $question = Question::findOrFail($question_id);
        $question->update($data);
        return redirect()->route('soal_materi.show', compact('id'))->with('status', 'Pertanyaan berhasil diubah');
    }
}
