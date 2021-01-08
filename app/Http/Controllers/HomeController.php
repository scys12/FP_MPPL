<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\UserVideoMateri;
use App\UserSoalMateri;
use App\UserPrivate;
use App\Freemalangga;

use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        return view('home');
    }

    public function showDashboard(Request $request)
    {
        $user_id = $request->user()->id;
        $buy_one = Payment::where('user_ids', '=', $user_id)
                            ->where('type', "1")
                            ->where('date_started', '<=', new \DateTime())
                            ->where('date_end', '>=', new \DateTime())
                            ->get();
        $buy_two = Payment::where('user_ids', '=', $user_id)
                            ->where('type', "2")
                            ->where('date_started', '<=', new \DateTime())
                            ->where('date_end', '>=', new \DateTime())
                            ->get();
        $one;
        $two;
        if(count($buy_one)){
            $one = $buy_one[0];
        }else {
            $one = null;
        }
        if(count($buy_two)){
            $two = $buy_two[0];
        }else {
            $two = null;
        }

        $videoMateri = UserVideoMateri::where('user_ids', $user_id)->get();
        $soalMateri = UserSoalMateri::where('user_ids', $user_id)->get();
        $privateClass = UserPrivate::where('user_ids', $user_id)->get();
        return view('dashboard', [
            'one' => $one,
            'two' => $two,
            'userVideoMateri' => $videoMateri,
            'userSoalMateri' => $soalMateri,
            'privateClass' => $privateClass
        ]);
    }

    public function showVideoMateriComment(){
        return view('comment');
    }
    public function showMateriComment(){
        return view('comment');
    }    

    public function showOurProducts()
    {
        return view('our_products');
    }

    public function displayHowToTransferPage()
    {
        return view('transfer');
    }

    public function showPromoPage()
    {
        return view('promo.index');
    }

    public function showDetailPromoPage()
    {
        return view('promo.show');
    }

    public function showUpdateProfilePage()
    {
        return view('profile.update');
    }

    public function showProfilePage()
    {
        return view('profile.show');
    }

    public function showPrivatePage()
    {
        return view('private');
    }    

    public function showFreemalanggaPage()
    {
        $freemalangga = Freemalangga::paginate(9);
        return view('freemalangga', compact('freemalangga'));
    }

    public function showFreemalanggaDetailPage(Request $request, $id)
    {
        $freemalangga = Freemalangga::find($id);
        return view('detail_freemalangga', compact('freemalangga'));
    }    

    public function showPaymentPage()
    {
        return view('payment');
    }

    public function updateUser(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($request->user())],
            'username' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($request->user())],
            'phone_number' => ['required', 'numeric', 'min:12'],
        ]);
        $data = $request->all();
        $request->user()->update($data);
        if ($request->user()->role == 'teacher') {
            return redirect()->route('teacher.profile.show');
        }else if ($request->user()->role == 'user') {
            return redirect()->route('profile.show');
        }
    }
}