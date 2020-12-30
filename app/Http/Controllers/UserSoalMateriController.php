<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserSoalMateri;

class UserSoalMateriController extends Controller
{
  public function registerSoal(Request $request, $id)
    {
        $user_id = $request->user()->id;
        UserSoalMateri::create([
            'user_ids' => $user_id,
            'soal_materi_ids' => $id
        ]);
        return redirect()->route('soal_materi.show', ['id' => $id])->with('status', 'Soal berhasil diikuti');
    }
}
