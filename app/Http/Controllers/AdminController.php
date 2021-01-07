<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freemalangga;

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

  public function insertFree(Request $request)
  {
    
    Freemalangga::create([
      'name' => $request->name,
      'description' => $request->description
    ]);
    return redirect()->route('admin.freemalangga.index');
  }

  public function displayAllFreemalangga()
  {
    $freemalanggas = Freemalangga::paginate(9);
    return view('admin.freemalangga.index', compact('freemalanggas'));
  }

  public function displayFreemalangga(Request $request, $id)
  {
    $freemalangga = Freemalangga::find($id);
    return view('detail_freemalangga', compact('freemalangga'));
  }

  public function displayFreemalanggaInsertPage()
  {
    return view('admin.freemalangga.insert');
  }

  public function displayFreemalanggaUpdatePage(Request $request, $id)
  {
    $freemalangga = Freemalangga::find($id);
    return view('admin.freemalangga.update', compact('freemalangga'));
  }

  public function updateFreemalangga(Request $request, $id)
  {
    $freemalangga = Freemalangga::find($id);
    $data['description'] = $request->description;
    $data['name'] = $request->name;
    $freemalangga->update($data);
    return redirect()->route('admin.freemalangga.index');
  }

  public function deleteFreemalangga(Request $request)
  {
    $id = $request->id;
    Freemalangga::findOrFail($id)->delete();
    return redirect()->route('admin.freemalangga.index');       
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