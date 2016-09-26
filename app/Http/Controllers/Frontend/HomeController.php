<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Auth;
use Charts;
use App\Http\Controllers\Controller;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function charts()
    {

        
        $chart = Charts::new('line', 'highcharts')
            ->setTitle('My nice chart')
            ->setLabels(['First', 'Second', 'Third'])
            ->setValues([5,10,20])
            ->setDimensions(1000,500)
            ->setResponsive(false);
        return view('charts', ['chart' => $chart]);
    }    
}
