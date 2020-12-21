@extends('layouts.app')

@section('page_title')
Membuat artikel baru- Refimadras
@endsection

@section('content')
    <h1>Buat artikel baru</h1>


    <form action="/article" method="POST" enctype="multipart/form-data">
        @csrf
        <x-input field="title" label="Judul" type="text" />
        <x-textarea field="subject" label="Subjek"/>
        <x-input-file field="thumbnail" label="Upload Thumbnail"/>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
