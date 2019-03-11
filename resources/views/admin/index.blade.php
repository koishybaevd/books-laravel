@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-7 mb-3">
            <ul class="list-group">
                <li class="list-group-item bg-light font-weight-bold d-flex justify-content-between">
                    <span>Books ({{ $books->count() }})</span>
                    <a href="{{ route('books.create') }}" class="btn btn-sm btn-dark">
                        <i class="fas fa-plus mr-1"></i>
                        Add Book
                    </a>
                </li>
                @foreach ($books as $book)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $book->title }}</span>
                    <div class="d-flex">
                        <div>
                            <a href="{{ route('books.show', ['id' => $book->id]) }}" class="btn btn-sm btn-dark">
                                <i class="fas fa-info"></i>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('books.edit', ['id' => $book->id]) }}" class="btn btn-sm btn-dark mx-1">
                                <i class="fa fa-pen"></i>
                            </a>
                        </div>
                        <form method="post" action="{{ route('books.destroy', ['id' => $book->id]) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-dark mx-1"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-12 col-md-5">
            <ul class="list-group">
                <li class="list-group-item bg-light font-weight-bold d-flex justify-content-between">
                    <span>Authors ({{ $authors->count() }})</span>
                    <div>
                        <a href="{{ route('authors.create') }}" class="btn btn-sm btn-dark">
                            <i class="fas fa-plus mr-1"></i>
                            Add Author
                        </a>
                    </div>
                </li>
                @foreach ($authors as $author)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $author->name }} {{ $author->surname }} ({{ $author->books->count() }})</span>
                    <div class="d-flex">
                        <div>
                            <a href="{{ route('authors.show', ['id' => $author->id]) }}" class="btn btn-sm btn-dark">
                                <i class="fas fa-info"></i>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('authors.edit', ['id' => $author->id]) }}" class="btn btn-sm btn-dark mx-1">
                                <i class="fa fa-pen"></i>
                            </a>
                        </div>
                        <form method="post" action="{{ route('authors.destroy', ['id' => $author->id]) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-dark mx-1"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
