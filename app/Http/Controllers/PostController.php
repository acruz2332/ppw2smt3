<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Post;
use Image;
use timestamps;
class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $data = array(
            'id' => 'posts',
            'posts' => Post::orderBy('created_at', 'desc')->paginate(5),
        );
        // dd($data);
        // $data = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('blog')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'picture' => 'image|nullable|max:1999   '
        ]);

        if ($request->hasFile('picture')){
            $foto = $request->picture;
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            Image::make($foto)->resize(500,500)->encode('jpg')->save(storage_path().'\app\public\posts_image/'.$filenameSimpan);
            // $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        }else{
            $filenameSimpan = 'noimage.png';
        }
        $post = new Post;
        $post->picture = $filenameSimpan;
        $post->title = $request->input('title');
        $post->description = $request->input('deskripsi');
        $post->save();

        return redirect('/post')->with('pesan', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::find($id);
        
        return view('lihat', compact('data'));
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
        Post::where('id', $id)->update(['title'=> $request->title]);
        Post::where('id', $id)->update(['description'=> $request->desc]);

        return redirect('/post')->with('pesan', 'Data berhasil diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('/post')->with('pesan', 'Data berhasil dihapus!');;
    }
}
