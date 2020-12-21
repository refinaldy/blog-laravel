@extends('layouts.app')

@section('page_title')
Edit : {{ $article->title }}- Refimadras
@endsection

@section('content')
    <h1>Edit Artikel</h1>

    <form action="/article/{{$article->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-input field="title" label="Judul" type="text" value="{{$article->title}}"/>
        <x-textarea field="subject" label="Subjek" value="{{ $article->subject }}"/>
        @if($article->thumbnail)
            <img src="/image/{{$article->thumbnail}}" class="card-img-top" >
        @else 
            <p>Artikel ini belum memiliki thumbnail</p>
        @endif

        <x-input-file field="thumbnail" label="Upload Thumbnail Baru"/>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
