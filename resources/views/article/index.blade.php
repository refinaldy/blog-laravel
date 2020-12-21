@extends('layouts.app')

@section('page_title', 'Halaman Artikel Refi Madras')

@section('content')
    <h1>Halaman Artikel</h1>
    
    @foreach ($articles->chunk(3) as $articleChunk)
        <div class="row mr-2 ml-2">
            @foreach ($articleChunk as $article)
                <div class="col card mb-2 ">
                    @if($article->thumbnail)
                    <img src="/image/{{$article->thumbnail}}" class="card-img-top mt-1">
                    @endif
                    <div class="card-body">
                        <h3>{{ ucfirst($article->title) }}</h3>
                        <p>{{ $article->subject }}</p>
                        
                        <a href="/article/{{$article->slug}}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    
    
    <div class="col card mt-5">
        <div class="row"
            {{ $articles->links() }}    
        </div>
    </div>

    @include('layouts.footer')   

@endsection
