<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Выводит данные из таблицы Article
     */
    public function  show()
    {
        dump(Article::all());
    }

}
