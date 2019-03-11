@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-6">
            <form method="post" action="{{ route('books.update', ['id' => $book->id]) }}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input name="title" id="inputTitle" class="form-control" type="text" value="{{ $book->title }}" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-dark">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection