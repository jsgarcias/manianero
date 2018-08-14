<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Category::all();
        return view('Pages.crear', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $noticia = new Post;
        $noticia->title = $request->titulo;
        if($request->file('file') == null){
            return response('No venía la imagen', 500);
        }
        $noticia->image = $request->file('file')->store('public');
        $noticia->image = substr($noticia->image, 7);
        $noticia->body = $request->summernote;
        $noticia->category_id = $request->category;
        $noticia->user_id = Auth::id();
        $noticia->state = $request->state;
        
        if($noticia->save()){
            return view('pages.success', ['mensaje' => 'La noticia ha sido enviada exitosamente.', 200]);
        }else{
            return view('pages.success', ['mensaje' => 'La noticia no pudo ser enviada.', 500]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $noticia = Post::find($id);
        
        return view('pages.leer', ['noticia'=>$noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
