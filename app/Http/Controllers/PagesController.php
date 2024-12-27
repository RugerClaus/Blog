<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private function operator(){
        $operators = ['+','-','/','*'];
        $operator = $operators[rand(0,count($operators)-1)];
        return $operator;
    }

    public function home()
    {
        return view('pages.home');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function contact()
    {
        return view('pages.contact',['num1' => random_int(1,2000),
                                    'num2' => random_int(1,2000),
                                    'operator' => $this->operator()]);
    }
    public function about()
    {
        return view('pages.about');
    }
}
