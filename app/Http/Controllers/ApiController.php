<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction(Request $request)
        {
            return view('index');
        }
    public function sorokodinAction(Request $request)
        {
            return view ('sorokodin');
        }

    public function sorokdvaAction(Request $request)
        {
            return view('sorokdva');
        }

    public function soroktriAction(Request $request)
        {
            return view('soroktri');
        }
    public function sorokchetireAction(Request $request)
    {
        return view('sorokchetire');
    }

    public function sorokpyatAction(Request $request)
        {
            return view('sorokpyat');
        }

    public function getArticles(Request $request)
        {
            return (new ArticleController())->show();
        }

}
