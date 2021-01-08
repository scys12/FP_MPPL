<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherClassRequest;
use App\PrivateClass;
use App\User;
use App\UserPrivate;
class ClassController extends Controller
{
  public function showClass(Request $request){
    $class = PrivateClass::where('user_ids', $request->user()->id)->paginate(9);
    return view('teacher.class.index',[
      'classes' => $class,
    ]);
  }
  public function showDetailClass(Request $request, $id){
    $class = PrivateClass::findOrFail($id);
    $userClass = UserPrivate::where('private_class_ids', $id)->get();
    return view('teacher.class.show',[
      'class' => $class,
      'userClass' => $userClass
    ]);
  }

  public function addZoom(Request $request, $id)
  {
    $userClass = UserPrivate::findOrFail($request->user_private_id);
    $userClass->zoom = $request->zoom;
    $userClass->save();
    return redirect()->route('teacher.class.show', ['id' => $id]);
  }

  public function showClassInsertPage(){
    return view('teacher.class.insert');
  }
  public function showClassUpdatePage(Request $request, $id){
    $class = PrivateClass::findOrFail($id);
    return view('teacher.class.update', [
      'class' => $class,
    ]);
  }

  public function addClass(TeacherClassRequest $request)
  {
    $data = $request->validated();
    $data['user_ids'] = $request->user()->id;
    $newClass = PrivateClass::create($data);
    return redirect()->route('teacher.class.index');
  }
  
  public function updateClass(TeacherClassRequest $request, $id)
  {
    $data = $request->validated();
    $class = PrivateClass::findOrFail($id);
    $class->update($data);
    return redirect()->route('teacher.class.index');
  }
  public function deleteClass(Request $request)
  {
    $class = PrivateClass::findOrFail($request->id);
    $class->delete();
    return redirect()->route('teacher.class.index');    
  }
}