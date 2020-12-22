<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoMateriRequest;
use App\VideoMateri;
use Illuminate\Support\Facades\Storage;

class VideoMateriController extends Controller
{
  public function displayAllVideoMateri(Request $request)
  {
    $video_materis = $request->user()->video_materis;
    return view('teacher.video_materi.index',[
      'video_materis' => $video_materis,
    ]);
  }

  public function showVideoMateri(Request $request, $id)
  {
    $video_materi = VideoMateri::findOrFail($id);
    return view('teacher.video_materi.show',[
      'video_materi' => $video_materi,
    ]);
  }

  public function displayVideoMateriInsertPage()
  {
    return view('teacher.video_materi.insert');
  }

  public function displayVideoMateriUpdatePage(Request $request, $id)
  {
    $video_materi = VideoMateri::findOrFail($id);
    return view('teacher.video_materi.update', [
      'video_materi' => $video_materi,
    ]);
  }
  
  public function insertVideoMateri(VideoMateriRequest $request)
  {
    $data = $request->validated();
    $data['user_ids'] = $request->user()->id;
    $filename = pathinfo($data['link-file']->hashName(), PATHINFO_FILENAME).'.'.$data['link-file']->getClientOriginalExtension();
    $path = $data['link-file']->storeAs('public/video_materi', $filename);
    $path = str_replace('public/','',$path);
    $data['link'] = $path;
    $videoMateri = VideoMateri::create($data);
    return redirect()->route('teacher.video_materi.index'); 
  }

  public function updateVideoMateri(VideoMateriRequest $request, $id)
  {
    $data = $request->validated();
    $videoMateri = VideoMateri::findOrFail($id);
    if ($data['link-file']) {
      $file = $data['link-file'];
      $filename = explode('/',$videoMateri->link)[1];
      $filename_new = str_replace(pathinfo($filename, PATHINFO_EXTENSION),$file->getClientOriginalExtension(),$filename);
      $moved = $file->move(public_path('storage/video_materi'),$filename);
      if ($filename != $filename_new) {
        Storage::move('public/video_materi/'.$filename, 'public/video_materi/'.$filename_new);
      }
      $data['link'] = 'video_materi/'.$filename_new;
    }
    $videoMateri->update($data);
    return redirect()->route('teacher.video_materi.index'); 
  }

  public function deleteVideoMateri(Request $request)
  {
      $id = $request->id;
      $link = VideoMateri::findOrFail($id)->link;
      $deletedFile = Storage::delete('/public/'.$link);
      VideoMateri::findOrFail($id)->delete();
      return redirect()->route('teacher.video_materi.index');       
  }
}