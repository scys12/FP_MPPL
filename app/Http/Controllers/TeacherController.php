<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

  public function showDashboard()
  {
    return view('teacher.dashboard');
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

}