<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoMateri;
use App\SoalMateri;
use App\PrivateClass;
class ProductController extends Controller{
  public function showBelajarMandiriPage()
  {
    $videoMateri = VideoMateri::all()->take(3);
    $soalMateri = SoalMateri::all()->take(3);
    return view('belajar_mandiri', [
      'video_materi' => $videoMateri,
      'soal_materi' => $soalMateri,
    ]);
  }

  public function showVideoMateri(Request $request, $id)
  {
    $videoMateri = VideoMateri::findOrFail($id);
    return view('client.video_materi.show',[
      'video_materi' => $videoMateri,
    ]);
  }

  public function showSoalMateri(Request $request, $id){
    $soalMateri = SoalMateri::findOrFail($id);
    return view('client.soal_materi.show', [
      'soal_materi' => $soalMateri,
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
        return view('client.private.show', [
          'private' => $private,
        ]);
    }
}