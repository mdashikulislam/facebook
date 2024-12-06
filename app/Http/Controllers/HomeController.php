<?php

namespace App\Http\Controllers;

use App\Models\IpInfo;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (\request()->ajax()){
            return DataTables::of(IpInfo::whereNotNull('ip'))->make(true);
        }
        return view('home');
    }

}
