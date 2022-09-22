@extends('layouts/header')

@section('content')

@if(Session::has('pesan'))
    <div class="alert alert-success">{{ Session::get('pesan') }}</div>
@endif

<br>
<form action="{{ route('post.store') }}" method="POST">
{{ csrf_field() }}
    Title: <input type="text" name="title"> <br>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    description : <textarea name="deskripsi" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Kirim">
</form>
<br>

@if(count($posts)>0)
    @foreach ($posts as $post)
        <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
        Deskripsi :<small> {{$post->description}}</small>
    @endforeach
@else
    <h3>tidak ada data.</h3>
@endif
@endsection