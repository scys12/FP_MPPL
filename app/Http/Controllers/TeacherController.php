<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\VideoMateri;
use App\SoalMateri;
use App\PrivateClass;
use App\Comment;
class TeacherController extends Controller
{
  public function register()
  {
    return view('teacher.auth.register');
  }

  public function showProfile()
  {
    return view('teacher.profile.show');
  }

  public function updateProfile()
  {
    return view('teacher.profile.update');
  }

  public function displayAllVideoMateri()
  {
    return view('teacher.video_materi.index');
  }

  public function displayAllMateri()
  {
    return view('teacher.materi.index');
  }

  public function displayVideoMateriInsertPage()
  {
    return view('teacher.video_materi.insert');
  }

  public function displayVideoMateriUpdatePage()
  {
    return view('teacher.video_materi.update');
  }  

  public function showDashboard(Request $request)
  {
    $user_id = $request->user()->id;
    $userVideoMateri = VideoMateri::where('user_ids', $user_id)->get();
    $userSoalMateri = SoalMateri::where('user_ids', $user_id)->get();
    $privateClass = PrivateClass::where('user_ids', $user_id)->get();
    return view('teacher.dashboard',compact('userVideoMateri', 'userSoalMateri', 'privateClass'));
  }


  public function showDetailPrivateInfo(){
      return view('teacher.private.show');
  }

  public function showPrivateInfoInsertPage(){
      return view('teacher.private.insert');
  }

  public function showPrivateInfoUpdatePage(){
      return view('teacher.private.update');
  }

  public function addQuestion(Request $request, $id)
  {
      $data['user_ids'] = $request->user()->id;
      $data['type'] = $request->type;
      $data['question'] = $request->question;
      $data['product_ids'] = $id;
      Question::create($data);
      return redirect()->route('teacher.video_materi.show', ['id' => $id]);
  }
  public function addQuestionSoalMateri(Request $request, $id)
  {
      $data['user_ids'] = $request->user()->id;
      $data['type'] = $request->type;
      $data['question'] = $request->question;
      $data['product_ids'] = $id;
      Question::create($data);
      return redirect()->route('teacher.materi.show', ['id' => $id]);
  }
  
  public function showQuestion(Request $request, $id, $question_id)
  {
      $question = Question::findOrFail($question_id);
      return view('teacher.video_materi.comment', compact('question', 'id'));
  }

  public function showQuestionSoalMateri(Request $request, $id, $question_id)
  {
      $question = Question::findOrFail($question_id);
      return view('teacher.materi.comment', compact('question', 'id'));
  }

  public function addComment(Request $request, $id, $question_id)
    {
        $data['user_ids'] = $request->user()->id;
        $data['question_ids'] = $question_id;
        $data['comment'] = $request->comment;
        Comment::create($data);
        return redirect()->route('teacher.video_materi.question.show',['id' => $id, 'question_id' => $question_id]);
    }

    public function addCommentSoalMateri(Request $request, $id, $question_id)
    {
        $data['user_ids'] = $request->user()->id;
        $data['question_ids'] = $question_id;
        $data['comment'] = $request->comment;
        Comment::create($data);
        return redirect()->route('teacher.soal_materi.question.show',['id' => $id, 'question_id' => $question_id]);
    }
}