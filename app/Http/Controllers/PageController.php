<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PageController extends Controller
{
   /* public function index(){
        $Title = 'Bienvenido Guatemala!';
        return view('pages.index')->with('Title',$Title);
    }

    public function about(){
        return view('pages.About');
    }*/

    public function portal(){
        
        $noticias = DB::table('posts')
                ->orderBy('created_at', 'desc')
                ->get();
        
        return view('Pages.portal', ['noticias' => $noticias]);
    }
}
