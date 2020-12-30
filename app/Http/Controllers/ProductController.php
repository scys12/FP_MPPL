<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoMateri;
use App\SoalMateri;
use App\Payment;
use App\PrivateClass;
use App\Question;

class ProductController extends Controller{
  public function showBelajarMandiriPage(Request $request)
  {
    $user_id = $request->user()->id;
    $buy_one = Payment::where('user_ids', '=', $user_id)
                      ->where('type', "1")
                      ->where('date_started', '<=', new \DateTime())
                      ->where('date_end', '>=', new \DateTime())
                      ->get();

    $videoMateri = VideoMateri::all()->take(3);
    $soalMateri = SoalMateri::all()->take(3);
    return view('belajar_mandiri', [
      'one' => count($buy_one),
      'video_materi' => $videoMateri,
      'soal_materi' => $soalMateri,
    ]);
  }

  public function showVideoMateri(Request $request, $id)
  {
    $videoMateri = VideoMateri::findOrFail($id);
    $questions = Question::where('type', '1')
                        ->where('product_ids', $id)
                        ->get();
    return view('client.video_materi.show',[
      'video_materi' => $videoMateri,
      'questions' => $questions,
    ]);
  }

  public function showSoalMateri(Request $request, $id){
    $soalMateri = SoalMateri::findOrFail($id);
    $questions = Question::where('type', '2')
                        ->where('product_ids', $id)
                        ->get();
    return view('client.soal_materi.show', [
      'soal_materi' => $soalMateri,
      'questions' => $questions,
    ]);
  }

  public function showPrivatePage()
  {
    $private = PrivateClass::paginate(6);
    return view('client.private.index', [
      'private' => $private,
    ]);
  }

  public function showDetailPrivatePage(Request $request, $id)
  {
      $private = PrivateClass::findOrFail($id);
      $buy = Payment::where('user_ids', '=', $request->user()->id)
                    ->where('type', "2")
                    ->where('date_started', '<=', new \DateTime())
                    ->where('date_end', '>=', new \DateTime())
                    ->where('teacher_ids', $private->user_ids)
                    ->where('private_ids', $id)
                    ->get();
      return view('client.private.show', [
        'private' => $private,
        'buy' => count($buy),
      ]);
  }

  public function showAllVideoMateri(Request $request){
      $user_id = $request->user()->id;
      $buy_one = Payment::where('user_ids', '=', $user_id)
                      ->where('type', "1")
                      ->where('date_started', '<=', new \DateTime())
                      ->where('date_end', '>=', new \DateTime())
                      ->get();
      $videoMateri = VideoMateri::paginate(9);
      return view('client.video_materi.index', compact('videoMateri', 'buy_one'));
  }

  public function showAllMateri(Request $request){
      $user_id = $request->user()->id;
      $buy_one = Payment::where('user_ids', '=', $user_id)
                      ->where('type', "1")
                      ->where('date_started', '<=', new \DateTime())
                      ->where('date_end', '>=', new \DateTime())
                      ->get();
      $soalMateri = SoalMateri::paginate(9);
      return view('client.soal_materi.index', compact('soalMateri', 'buy_one'));
  }
}