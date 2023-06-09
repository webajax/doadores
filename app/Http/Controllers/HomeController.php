<?php

namespace App\Http\Controllers;

use App\Repositories\Menus\ProfileRepository;
use Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    protected  $ProfileRepository;


    public function __invoke(){}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProfileRepository $repo)
    {
        $this->ProfileRepository = $repo;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        
        $resp =
            [
                'menu' => $this->ProfileRepository->findModules(Auth::user()->id_profile) ,
                'nome' => Auth::user()->name,
                'email' => Auth::user()->email,
            ];

        session(['resp' => $resp]);

        return View::make('templates.default')
            ->with('resp', $resp)
            ->with('page','layouts.app');
    }

}
