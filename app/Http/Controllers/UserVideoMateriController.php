<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserVideoMateri;

class UserVideoMateriController extends Controller
{
    public function registerSoal(Request $request, $id)
    {
        $user_id = $request->user()->id;
        UserVideoMateri::create([
            'user_ids' => $user_id,
            'video_materi_ids' => $id
        ]);
        return redirect()->route('video_materi.show', ['id' => $id])->with('status', 'Video berhasil diikuti');
    }
}
