<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Niw;
use App\Image;
use App\Shoe;
use App\User;

class newsController extends Controller
{
    public function getIndexNews(){

      $news = DB::table('news')
                ->join('shoes', 'news.id', '=', 'shoes.id_news')
                ->join('images', 'shoes.id', '=', 'images.id_shoe')
                ->select('images.path', 'news.title', 'news.id')
                ->groupBy('news.id', 'shoes.id_news')
                ->get();
      return view('newsIndex', compact('news'));

    }
    public function getNews($id){
    $images = DB::table('news')
              ->join('shoes', 'news.id', '=', 'shoes.id_news')
              ->join('images', 'shoes.id', '=', 'images.id_shoe')
              ->select('images.path')
              ->where('news.id', '=', $id)
              ->get();

    $news = DB::table('news')
            ->join('users', 'users.id','news.id_user')
            ->select('text', 'title', 'name')
            ->where('news.id', '=', $id)
            ->get();


              return view('newsDetail', compact('images', 'news'));

    }


}