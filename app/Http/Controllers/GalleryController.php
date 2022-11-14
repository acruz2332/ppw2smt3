<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
         $data = array(
         'id' => "posts",
         'menu' => 'Gallery',
         'galleries' => Post::where('picture', '!=', 
        '')->whereNotNull('picture')->orderBy('created_at','desc')->paginate(30));
         return view('gallery.index')->with($data);

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
