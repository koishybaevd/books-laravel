@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4>{{ $author->name }} {{ $author->surname }}</h4>
            <p>Books:</p>
            @foreach ($author->books as $book)
            <p>{{ $book->title }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection
