@extends('layouts.app')

<!-- Show single book info -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4>{{ $book->title }}</h4>
            <p>Author: {{ $book->author->name }} {{ $book->author->surname }}</p>
        </div>
    </div>
</div>
@endsection
