@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <ul class="list-group">
                <li class="list-group-item bg-light font-weight-bold">Authors ({{ $authors->count() }})</li>
                @foreach ($authors as $author)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $author->name }} {{ $author->surname }}</span>
                    <div class="d-flex">
                        <a href="{{ route('authors.edit', ['id' => $author->id]) }}" class="btn btn-sm btn-info mx-1">E</a>
                        <form method="post" action="{{ route('authors.destroy', ['id' => $author->id]) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger mx-1">D</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-12 col-md-6">
            <ul class="list-group">
                <li class="list-group-item bg-light font-weight-bold">Books ({{ $books->count() }})</li>
                @foreach ($books as $book)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $book->title }}</span>
                    <div class="d-flex">
                        <a href="{{ route('books.edit', ['id' => $book->id]) }}" class="btn btn-sm btn-info mx-1">E</a>
                        <form method="post" action="{{ route('books.destroy', ['id' => $book->id]) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger mx-1">D</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
