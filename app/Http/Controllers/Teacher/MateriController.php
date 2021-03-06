<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MateriRequest;
use App\SoalMateri;
use App\Question;
class MateriController extends Controller
{

  public function displayAllMateri(Request $request)
  {
    $soal_materis = SoalMateri::where('user_ids', $request->user()->id)->paginate();
    return view('teacher.materi.index',[
      'soal_materis' => $soal_materis,
    ]);
  }

  public function showMateri(Request $request, $id)
  {
    $materi = SoalMateri::findOrFail($id);
    $questions = Question::where('type', '1')
                        ->where('product_ids', $id)
                        ->get();
    return view('teacher.materi.show',[
      'materi' => $materi,
      'questions' => $questions
    ]);
  }
  
  public function displayMateriInsertPage()
  {
    return view('teacher.materi.insert');
  }

  public function displayMateriUpdatePage(Request $request, $id)
  {
    $materi = SoalMateri::findOrFail($id);
    return view('teacher.materi.update', [
      'materi' => $materi,
    ]);
  }

  public function insertMateri(MateriRequest $request)
  {
    $data = $request->validated();
    $data['user_ids'] = $request->user()->id;
    $materi = SoalMateri::create($data);
    return redirect()->route('teacher.materi.index');
  }

  public function updateMateri(MateriRequest $request, $id)
  {
    $data = $request->validated();
    $data['user_ids'] = $request->user()->id;
    $materi = SoalMateri::findOrFail($id);
    $materi->update($data);
    return redirect()->route('teacher.materi.index');
  }

  public function deleteMateri(Request $request)
  {
    $id = $request->id;
    $materi = SoalMateri::findOrFail($id);
    $materi->delete();
    return redirect()->route('teacher.materi.index');
  }
}