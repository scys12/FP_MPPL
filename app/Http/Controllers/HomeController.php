<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showVideoMateriComment(){
        return view('comment');
    }
    public function showMateriComment(){
        return view('comment');
    }

    public function showAllVideoMateri(){
        return view('all_video_materi');
    }
    public function showAllMateri(){
        return view('all_materi');
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

    public function showBelajarMandiriPage()
    {
        return view('belajar_mandiri');
    }

    public function showVideoMateri(){
        return view('video_materi');
    }

    public function showSoalMateri(){
        return view('soal_materi');
    }

    public function showPrivatePage()
    {
        return view('private');
    }

    public function showDetailPrivatePage()
    {
        return view('detail_private');
    }

    public function showFreemalanggaPage()
    {
        return view('freemalangga');
    }

    public function showFreemalanggaDetailPage()
    {
        return view('detail_freemalangga');
    }

    public function showBuyPacketPage()
    {
        return view('buy_packet');
    }

    public function showPaymentPage()
    {
        return view('payment');
    }
}