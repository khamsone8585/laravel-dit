<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home()
    {
        return view('home.index');
    }
    public function Activity()
    {
        return view('pages.activity');
    }
    public function Contact()
    {
        return view('pages.contact');
    }
    public function History()
    {
        return view('pages.history');
    }
    public function Structure()
    {
        return view('pages.structure');
    }
    public function Role()
    {
        return view('pages.role');
    }
    public function WhiteReport()
    {
        return view('pages.white_report');
    }
    public function Strategy()
    {
        return view('pages.strategy');
    }
    public function FuelPrice()
    {
        return view('pages.fuel_price');
    }
    public function News()
    {
        return view('pages.news');
    }
    public function Statistic()
    {
        return view('pages.statistic');
    }
    public function Legislation()
    {
        return view('pages.legislation');
    }
    public function Order()
    {
        return view('pages.order');
    }
    public function Notice()
    {
        return view('pages.notice');
    }
    public function NewsDetail($id)
    {
        $dataNews = DB::table('news')->where('id',$id)->get();
        return view('pages.detailNews',compact('dataNews'));
    }

}
