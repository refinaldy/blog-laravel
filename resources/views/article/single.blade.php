@extends('layouts.app')

@section('page_title')
    {{$article->title}}
@endsection

@section('content')
    
    <div class="row">
        <a href="/article/{{$article->id}}/edit" class="btn btn-info btn-sm ml-3">Edit</a>                   
        <form action="/article/{{$article->id}}" method="post" class="ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </div>
    <div class="card mt-1">
        <div class="card-body">
            @if($article->thumbnail)
                <img src="/image/{{$article->thumbnail}}" class="card-img-top" >
            @endif
            
            <h1>{{ $article->title }}</h1> 
            <p>{{ $article->subject }}</p>
        </div>
    </div>

    <a href="/article" class="btn btn-primary btn-sm mt-1">Kembali</a>

    @include('layouts.footer')
@endsection