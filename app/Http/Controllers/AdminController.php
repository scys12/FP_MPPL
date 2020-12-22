<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function showDashboard()
  {
    return view('admin.dashboard');
  }

  public function register()
  {
    return view('admin.auth.register');
  }

  public function displayAllFreemalangga()
  {
    return view('admin.freemalangga.index');
  }

  public function displayFreemalanggaInsertPage()
  {
    return view('admin.freemalangga.insert');
  }

  public function displayFreemalanggaUpdatePage()
  {
    return view('admin.freemalangga.update');
  }

  public function displayAllStudent()
  {
    return view('admin.student.index');
  }

  public function displayStudentInsertPage()
  {
    return view('admin.student.insert');
  }

  public function displayStudentUpdatePage()
  {
    return view('admin.student.update');
  }

  public function displayAllTeacher()
  {
    return view('admin.teacher.index');
  }

  public function displayTeacherInsertPage()
  {
    return view('admin.teacher.insert');
  }

  public function displayTeacherUpdatePage()
  {
    return view('admin.teacher.update');
  }
}