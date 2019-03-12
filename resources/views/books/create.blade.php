@extends('layouts.app')

<!-- Create book -->
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-10 col-md-6">
            <form method="post" action="{{ route('books.store') }}">
                @csrf
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Enter title"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="inputAuthorName">Author name</label>
                    <input name="author_name" type="text" class="form-control" id="inputAuthor" placeholder="Enter author name"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="inputAuthorSurname">Author surname</label>
                    <input name="author_surname" type="text" class="form-control" id="inputAuthorSurname" placeholder="Enter author surname"
                        autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-dark">Store</button>
            </form>
        </div>
    </div>
</div>
@endsection
